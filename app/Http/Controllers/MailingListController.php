<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MailingListExport;

class MailingListController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_mailing_list()
  {
    $mails = MailingList::orderBy('created_at','desc')->get();
    return view('backend/mailingList/mailinglist')->with('mails',$mails);
  }

  public function mailinglist_download(Request $request)
  {
    return Excel::download(new MailingListExport, 'MailingList.csv');
  }
}
