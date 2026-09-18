<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\WantedBook;
use App\Models\ExchangeRequest;

class AdminController extends Controller
{
    public function dashboard()
    {
        $usersCount = User::count();
        $booksCount = Book::count();
        $wantedBooksCount = WantedBook::count();
        $exchangeRequestsCount = ExchangeRequest::count();

        return view('admin.dashboard', compact(
            'usersCount',
            'booksCount',
            'wantedBooksCount',
            'exchangeRequestsCount'
        ));
    }
}