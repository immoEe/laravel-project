<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="wrapper">
    <header class="header">
      <div class="header__inner container">
        <div class="header__logo"><h1>Логотип</h1></div>
        <div class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="{{ url('/') }}">Главная</a></li>
            <li class="header__nav-item"><a href="{{ url('/array') }}">Товары</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="main__inner container">
        <img src="{{ asset('img/main.png') }}" alt="main img" class="main__image">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat quia magnam odit incidunt ipsum aliquam cupiditate veritatis, est nam molestias fugiat dolores eveniet velit obcaecati possimus. Enim dolorum velit nihil?
        Perferendis amet nemo, alias, vel voluptatum assumenda natus temporibus aut blanditiis minima velit quia? Sed ipsum nesciunt culpa dolore sit id vero perspiciatis quibusdam exercitationem placeat, facere, dolorum esse? Quos!
        Fuga molestiae deserunt aperiam iste id excepturi enim aut rerum deleniti iure. Qui dolorum, nisi blanditiis maxime aut debitis. Dolorum sunt sed minima odit iure, iste deleniti consequuntur fugit quod!
        Velit hic, veritatis earum nemo libero animi a at unde harum odit exercitationem saepe dolorum fugit, esse eaque quas? Ab ut cupiditate repellendus officiis maiores itaque assumenda impedit vitae. Animi.
        Exercitationem porro laboriosam iure mollitia debitis dolores modi neque quidem accusantium aspernatur ipsam doloremque optio, quisquam praesentium magnam culpa perspiciatis. Incidunt error totam eligendi autem cumque repellendus officiis reiciendis mollitia.
        Corrupti rem repellendus mollitia dicta eum aut repellat consequuntur incidunt quaerat itaque repudiandae ut porro, fuga autem laborum similique cumque facilis ab animi sequi quos explicabo? Voluptate eveniet possimus ab!
        Tempora rem corrupti recusandae, porro sequi voluptatibus, non delectus tenetur necessitatibus harum laboriosam eius unde nihil ducimus nesciunt cum asperiores adipisci quas et numquam expedita iusto temporibus facilis! Atque, soluta?
        Voluptates, reprehenderit? Corporis sed sunt voluptate laborum aspernatur consequatur non, neque unde ab aperiam consectetur eos, reprehenderit pariatur? Unde tempore quod dolores vitae ipsam sed eos distinctio ad, optio culpa?</p>
      </div>
    </main>
    <footer class="footer">
      <div class="footer__inner container">
        <p>Кузнецов Виктор Андреевич 2024</p>
      </div>
    </footer>
    </div>
</body>
</html>
