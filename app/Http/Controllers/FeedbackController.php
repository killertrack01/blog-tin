<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    //Danh sách phản hồi trang admin
    public function listFeedback() 
    {
        $feedback = Feedback::all();
        return view('admin.feedback.list')->with(['feedback'=>$feedback]);
    }

    public function reportFeedback() 
    {
        $feedback = Feedback::all();
        return view('admin.feedback.report')->with(['feedback'=>$feedback]);
    }


    //Admin cập nhật phản hồi
    public function updateFeedback($id)
    {
        $f = Feedback::find($id)->where('id', '=', $id)->update(['status'=>'1']);
        return redirect()->action('FeedbackController@listFeedback');
    }

    //Admin xóa phản hồi
    public function deleteFeedback($id)
    {
        $f = Feedback::find($id);
        $f->delete();
        return redirect()->action('FeedbackController@listFeedback')->with('success','Xóa thành công');
    }

    //User phản hồi
    public function feedback()
    {
        $feedback = Feedback::all();
        return view('user.feedback')->with('feedback',$feedback);
    }

    public function createFeedback(Request $request)
    {
        $feedback = Feedback::all();
        $this->validate($request,
        [
            'name' => 'required|min:3|max:20',
            'email' => 'required',
            'rate' => 'required',
            'detail' => 'required'
        ],
        [   
            'rate.required' => 'Bạn chưa đánh giá trang web',
            'name.required' => 'Họ và tên không được bỏ trống !',
            'name.min' => 'Họ và tên phải có độ dài từ 3 đến 20 kí tự',
            'name.max' => 'Họ và tên phải có độ dài từ 3 đến 20 kí tự',
            'email.required' => 'Email không được bỏ trống !',
            'detail.required' => 'Ý kiến phản hồi không được bỏ trống !'

        ]
        );
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->detail = $request->detail;
        

        $feedback = new Feedback;
        $name = $request['name'];
        $email = $request['email'];
        $detail = $request['detail'];
        $rate = $request['rate'];

        $feedback['email'] = $email;
        $feedback['name'] = $name;
        $feedback['detail'] = $detail;
        $feedback['rate'] = $rate;
        $feedback['status'] = '0';
        $feedback;
        $feedback->save();
        return redirect()->route('feedback')->with('success','Gửi phản hồi thành công');
    }
}
