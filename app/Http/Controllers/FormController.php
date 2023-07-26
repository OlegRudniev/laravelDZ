
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function showFeedbackForm()
    {
        return view('forms.feedback');
    }

    public function submitFeedback(Request $request)
    {
        $username = $request->input('username');
        $comment = $request->input('comment');

        Storage::append('feedback.txt', "Username: $username, Comment: $comment");

        return redirect()->route('feedback.form')->with('success', 'Форма обратной связи успешно отправлена!');
    }

    public function showDataRequestForm()
    {
        return view('forms.data_request');
    }

    public function submitDataRequest(Request $request)
    {
        $customerName = $request->input('customer_name');
        $phoneNumber = $request->input('phone_number');
        $email = $request->input('email');
        $dataInfo = $request->input('data_info');

        Storage::append('data_requests.txt', "Customer Name: $customerName, Phone Number: $phoneNumber, Email: $email, Data Info: $dataInfo");

        return redirect()->route('data-request.form')->with('success', 'Форма заказа данных успешно отправлена!');
    }
}
