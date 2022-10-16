管理ユーザトップページ

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form>
