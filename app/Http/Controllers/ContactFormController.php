<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ReplyContactMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use DataTables;
use Illuminate\Support\Facades\Mail;
class ContactFormController extends Controller
{


    public function index(Request $request)
    {
        $messages = ContactForm::get()->all();
        return view('admin.contact-messages.manage', ['messages' => $messages]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|max:100',
                'email' => 'required|email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric|not_regex:/[a-z]/i',
                'subject' => 'required',
                'message' => 'required',
            ], [
                'name.max' => 'your name should be less than 100 characters',
                'phone.regex' => 'Invalid phone number',
                'phone.not_regex' => 'Invalid phone number',
                'email.required' => 'email is required',
                'email.max' => 'your email should be less than 100 characters',
                'subject.required' => 'subject is required',
                'message.required' => 'message is required',
            ]);
            // $mailData = [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'content' => $request->message,
            // ];
            // $replymailData = [
            //     'name' => $request->name,
            //     'content' => 'Thank you for contacting us. We will get back to you soon.'
            // ];

            $data = $request->all();
            ContactForm::create($data);

            // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($mailData));
            // Mail::to($request->email)->send(new ReplyContactMail($replymailData));

            return response()->json([
                'status' => 201,
                'data' => $data,
                'success' => true,
                'message' => 'Message sent successfully'
            ]);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->toArray();
            return response()->json([
                'success' => false,
                'errors' => $errors
            ]);
        }
    }

    function read(Request $request)
    {
        $contactForm = ContactForm::find($request->id);
        $contactForm->read_status = 1;
        $contactForm->save();
        return response()->json(['success' => 'Message read successfully']);
    }


    function important(Request $request)
    {
        $contactForm = ContactForm::find($request->id);
        $contactForm->important_status = $request->important_status;
        $contactForm->save();
        return response()->json([
            'success' => 'Message marked as important',
            'important_status' => $request->important_status
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $contactForm = ContactForm::find($id);
        $contactForm->delete();
        return redirect()->back()->with('success','Message deleted successfully');
    }
}
