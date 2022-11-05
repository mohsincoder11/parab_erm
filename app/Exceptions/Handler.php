<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Str;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    /*
    public function register()
    {
        //
    }
    */
    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Exception) {
           

            // if ($exception->getCode() == '500' || $exception->getCode() == '23000') {
            //     return response()->view('errors.500', [], 500);
            // }

            // if ($exception->getCode() == '0' && $exception->getmessage() == 'CSRF token mismatch.') {
            //     if (request()->segment(1) . request()->segment(2) == 'adminlogin') {
            //         return redirect()->route('admin.login')->with('error', 'Token expired. Please try again.');
            //     } elseif (request()->segment(1) == 'login') {
            //         $prev = url()->previous();
            //         if (Str::contains($prev, ['customer-login'])) {
            //             return redirect()->route('customerLogin')->with('error', 'Token expired. Please try again.');
            //         } else {
            //             return redirect()->route('login')->with('error', 'Token expired. Please try again.');
            //         }
            //     }
            //     return response()->view('errors.500', [], 500);
            // }
        }

        // if ($exception instanceof \ErrorException) {
        //     return response()->view('errors.custom', [], 500);
        // }

        return parent::render($request, $exception);
    }
}
