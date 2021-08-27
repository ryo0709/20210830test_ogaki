@extends('layouts.default')
<style>
  th {
    text-align: left;
  }
</style>
@section('title', 'トップページ')

@section('content')

<form action="/" method="post">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
    </tr>
    <tr>
      <th>
        <input type="text" name="name">
      </th>
    <tr>
    <tr>
      <th>
        メールアドレス
      </th>
    </tr>
    <tr>
      <th>
        <input type="text" name="email">
      </th>
    <tr>
      <th>
        <input type="submit" value="送信する">
      </th>
    </tr>
  </table>
</form>
@endsection
</body>

</html>