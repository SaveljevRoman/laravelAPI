<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Desk;
use Illuminate\Http\Request;

class DeskController extends BaseController
{
    /**
     * Список всех досок
     */
    public function index()
    {
        return Desk::all();
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
        return Desk::find($id);
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
