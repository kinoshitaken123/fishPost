<nav class="navbar navbar-expand-lg navbar-light pl-5 pr-5 pt-2 pb-2">
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>

  <ul class="navbar-nav ml-auto mr-5">
    <li class="nav-item ml-4">
      <a class="btn btn-primary" href="/posts" role="button">一覧</a>
    </li>
    <li class="nav-item ml-4">
      <a class="btn btn-primary" href="/posts" role="button">投稿</a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    </div>
    </li>
  </ul>
  </div><!-- /.navbar-collapse -->
</nav>