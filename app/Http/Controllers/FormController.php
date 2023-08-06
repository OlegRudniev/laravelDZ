<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    // ...

    public function submitFeedback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('feedback.form')
                ->withErrors($validator)
                ->withInput();
        }

        $username = $request->input('username');
        $comment = $request->input('comment');

        Storage::append('feedback.txt', "Username: $username, Comment: $comment");

        return redirect()->route('feedback.form')->with('success', 'Форма обратной связи успешно отправлена!');
    }

    public function submitDataRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'data_info' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('data-request.form')
                ->withErrors($validator)
                ->withInput();
        }

        $customerName = $request->input('customer_name');
        $phoneNumber = $request->input('phone_number');
        $email = $request->input('email');
        $dataInfo = $request->input('data_info');

        Storage::append('data_requests.txt', "Customer Name: $customerName, Phone Number: $phoneNumber, Email: $email, Data Info: $dataInfo");

        return redirect()->route('data-request.form')->with('success', 'Форма заказа данных успешно отправлена!');
    }
}

