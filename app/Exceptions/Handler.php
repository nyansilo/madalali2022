<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{

    
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
        
        });

        $this->renderable(function(Exception $e, $request) {
           return $this->unauthenticated($request, $e);
        });

        //$this->renderable(function (Exception $e) {
           // return $this->handleException($e);
        //});


        //$this->renderable(function (AuthenticationException $exception, $request) {
        //if ($request->is('admin') || $request->is('admin/*')) {
         //       return redirect()->guest('/admin/login');
        //}
        //return redirect()->guest(route('login'));
        //});

       
    }

    public function unauthenticated($request, AuthenticationException $e)
    {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
            if ($request->is('admin') || $request->is('admin/*')) {
                return redirect()->guest('/admin/login');
            }
            //if ($request->is('writer') || $request->is('writer/*')) {
               // return redirect()->guest('/login/writer');
            //}
            return redirect()->guest(route('login'));
    }

    //public function handleException($request, Exception $exception)
    /**public function handleException(Exception $exception)
    {

         if($exception instanceof AuthenticationException){
            $guard = array_get($exception->guards(), 0);
            switch($guard){
                case 'admin':
                    return redirect(route('admin.login'));
                    break;
                default:
                    return redirect(route('login'));
                    break;
            }

           
        }
    }
    */


}
