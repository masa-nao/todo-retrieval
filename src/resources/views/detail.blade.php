@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="table__wrapper">
  <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">
          {{ $todo['content'] }} <span>の詳細</span>
        </th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form" action="/todos/update" method="post">
            @method('patch')
            @csrf
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="{{ $todo->content }}">
              <input type="hidden" name="id" value="{{ $todo->id }}">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form" action="/todos/delete" method="post">
            @method('delete')
            @csrf
            <div class="delete-form__button">
              <input type="hidden" name="id" value="{{ $todo->id }}">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
  <div class="index__link">
    <a class="index__link--return" href="/">一覧に戻る</a>
  </div>
</div>
@endsection