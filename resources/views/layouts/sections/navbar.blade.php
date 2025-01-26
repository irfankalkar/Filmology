
<nav class="navbar navbar-expand-lg py-0 header_next_navbar_outer">
    <div class="container navbar_items">

      <div class="navbar-collapse header_next_navbar">

        <ul class="navbar-nav header_next_navbar_left_container">

          <li class="nav-item">
            <a class="nav-link action_btn" href="{{ route("category", "Aksiyon")}}?category=aksiyon&scroll=movies">AKSİYON</a>
          </li>

          <li class="nav-item">
            <a class="nav-link animation_btn" href="{{ route("category", "Animasyon")}}?category=animasyon&scroll=movies">ANİMASYON</a>
          </li>

          <li class="nav-item">
            <a class="nav-link science_fiction_btn" href="{{ route("category", "Bilim Kurgu")}}?category=bilim Kurgu&scroll=movies">BİLİM KURGU</a>
          </li>

          <li class="nav-item">
            <a class="nav-link drama_btn" href="{{ route("category", "Dram")}}?category=dram&scroll=movies">DRAM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link fantastic_btn" href="{{ route("category", "Fantastik")}}?category=fantastik&scroll=movies">FANTASTİK</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link more_categories dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              VE DAHASI
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route("category", "Gerilim")}}?category=gerilim&scroll=movies">Gerilim</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Gizem")}}?category=gizem&scroll=movies">Gizem</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Komedi")}}?category=komedi&scroll=movies">Komedi</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Korku")}}?category=korku&scroll=movies">Korku</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Macera")}}?category=macera&scroll=movies">Macera</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Polisiye")}}?category=polisiye&scroll=movies">Polisiye</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Psikolojik")}}?category=psikolojik&scroll=movies">Psikolojik</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Romantik")}}?category=romantik&scroll=movies">Romantik</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Spor")}}?category=spor&scroll=movies">Spor</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Savaş")}}?category=savaş&scroll=movies">Savaş</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Suç")}}?category=suç&scroll=movies">Suç</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Tarihi")}}?category=tarihi&scroll=movies">Tarihi</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Trajedi")}}?category=trajedi&scroll=movies">Trajedi</a></li>
              <li><a class="dropdown-item" href="{{ route("category", "Zombi")}}?category=zombi&scroll=movies">Zombi</a></li>
            </ul>
          </li>

        </ul>




        <ul class="navbar-nav header_next_navbar_right_container">

            <li class="nav-item">
              <a class="nav-link py-1" href="{{ route('lists_href') }}">
                  <i class="bi bi-card-list px-1 py-0"></i>
                  <span class="">Listeler</span>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link py-1" href="{{ route("random")}}">
                  <i class="bi bi-dice-5 px-1 py-0"></i>
                  <span class="">Zar at</span>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link py-1" href="{{ route("contact_href")}}">
                  <i class="bi bi-emoji-heart-eyes px-1 py-0"></i>
                  <span class="">Tavsiyeni sun</span>
              </a>
            </li>
  
        </ul>
  

      </div>

    </div>

</nav>
