<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NewsController extends Controller
{
    public function getNews()
    {
        
        $client = new Client();

        try {
            // Выполни GET-запрос к сервису Yandex News
            $response = $client->get('https://news.yandex.ru');
          
            $content = $response->getBody()->getContents();

           
            return response()->json(['data' => $content]);
        } catch (\Exception $e) {
         
            return response()->json(['error' => 'Произошла ошибка при получении данных: ' . $e->getMessage()], 500);
        }
    }
}


use App\Models\News;
use Illuminate\Http\Request;

public function create()
{
    return view('news.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    News::create($validatedData);

    return redirect('/')->with('success', 'Новость успешно сохранена');
}
