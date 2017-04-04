<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Validator;
use \Mail;
use \Redirect;
use \Session;




class ContactUSController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {

        $data = $request->all();
        $messages = [
            'name_full.required' => 'Введите реально имя',
            'name_full.min:4' => 'Имя должно быть минимум 4 символа',
            'name_full.max:35' => 'Имя должно быть максимум 35 символов',
            'email.*' => 'Введите корректный адрес Email',
            'tel.*' => 'Впишите свой номер',
        ];


        $rules = [
            'name_full' => 'required|min:2|max:35',
            'email' => 'email',
            'tel' => 'numeric'

        ];

        $validator = Validator::make($data, $rules, $messages);

        // Валидация данных из формы
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {




            //Отправляем Письмо оповещение
            Mail::send('la.layouts.partials.emailadmin', array(
                'name' => $request->get('name_full'),
                'tel' => $request->get('tel'),
                'email' => $request->get('email'),



            ), function ($m) {
                $m->from( env('MAIL_USERNAME'), env('APP_NAME'));
                $m->to(env('MAIL_DEFAULT'))->cc('MAIL_COPY')->subject('Оставлены данные с сайта',env('APP_NAME'));
            });
            
            //Вносим данные в базу
            ContactUS::create($data);
            Session::flash('flash_message', 'Сообщение отправлено');
            return Redirect::back();

        }

    }



}
