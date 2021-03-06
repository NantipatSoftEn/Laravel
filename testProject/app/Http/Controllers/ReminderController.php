<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Reminder;
class ReminderController extends Controller
{
    public function home()
    {
        /*$reminders = [
        'Buy Mike',
        'Go to Bank',
        'Move to out '];*/

        //$reminders = DB::table('Reminder')->orderBy('id','asc')->get();
        $reminders = Reminder::orderBy('id','desc')->get();

        return view ('home',['reminders'=>$reminders]  );
    }

    public function addReminder(Request $request)
    {
      /*$body = $request->reminder;

      DB::table('Reminder')->insert(['body'=> $body,'isFinished'=>false,'createdUserID'=>1]);*/
      $reminder = new Reminder();
      $reminder->body = $request->reminder;
      $reminder->isFinished = true;
      $reminder->createdUserID =1;

      $reminder->save();

      return back();
    }
    public function deleteReminder(Request $request)
    {
      $id = $request->id;
      Reminder::find($id)->delete();
      /*DB::table('Reminder')->where('id',$id)->delete();*/
      return back()->with('fucking one task');
    }
}
