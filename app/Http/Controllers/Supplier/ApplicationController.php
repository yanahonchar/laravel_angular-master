<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //email App
    public function emailApplication(){
        $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'email-application'];
        return view('supplier.pages.app-email', ['pageConfigs' => $pageConfigs]);
    }
    // chat App
    public function chatApplication(){
        $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'chat-application'];
        return view('supplier.pages.app-chat', ['pageConfigs' => $pageConfigs]);
    }
    // Todo App
    public function todoApplication(){
        $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'todo-application'];
        return view('supplier.pages.app-todo', ['pageConfigs' => $pageConfigs]);
    }
    // calendar App
    public function calendarApplication(){
        $pageConfigs = ['bodyCustomClass' => 'calendar-application'];
        return view('supplier.pages.app-calendar', ['pageConfigs' => $pageConfigs]);
    }
    // calendar App
    public function kanbanApplication(){
      $pageConfigs = ['isMenuCollapsed' => true];
        return view('supplier.pages.app-kanban',['pageConfigs'=>$pageConfigs]);
    }
     // invoice App
     public function invoiceListApplication(){
       
      return view('supplier.pages.app-invoice-list');
  }
   // invoice App
   public function invoiceApplication(){
    return view('supplier.pages.app-invoice');
  }
   // invoice edit App
   public function invoiceEditApplication(){
    return view('supplier.pages.app-invoice-edit');
  }
  // invoice add App
  public function invoiceAddApplication(){
    return view('supplier.pages.app-invoice-add');
  }
  // invoice add App
  public function fileManagerApplication(){
    $pageConfigs = ['isContentSidebar' => true, 'bodyCustomClass' => 'file-manager-application'];
    return view('supplier.pages.app-file-manager',['pageConfigs' => $pageConfigs]);
  }
}
