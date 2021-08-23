<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Resources\DeskResource;
use App\Models\Desk;
use Illuminate\Http\Request;

class DeskController extends BaseController
{
    /**
     * Список всех досок
     */
    public function index()
    {
        //ресурс выбирает только необходимые поля
        return DeskResource::collection(Desk::with('lists')->get());
    }

    /**
     * Сохранить новую доску
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Показать доску по id
     */
    public function show($id)
    {
        return new DeskResource(Desk::with('lists')->findOrFail($id));
    }

    /**
     * Изменить доску по id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Удалить доску по id
     */
    public function destroy($id)
    {
        //
    }
}
