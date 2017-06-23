<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">QueryPOS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}">หน้าหลัก</a></li>

        @if (Auth::guest())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              ขายสินค้า
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/pos') }}">ขายสินค้า</a></li>
              <li><a href="#">รับคืนสินค้า</a></li>
              <li><a href="#">จัดการบิลขาย</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">ใบวางบิล</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">ใบเสนอราคา</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              สต๊อกสินค้า
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/po') }}">รับสินค้าเข้าสต๊อก</a></li>
              <li><a href="#">ใบเบิกสินค้า</a></li>
              <li><a href="#">ใบรับสินค้า</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">ปรับยอดสต๊อก</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">ตรวจสอบสินค้าในสต๊อก</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              บัญชี
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              รายงาน
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">รายงานยอดขายรายวัน</a></li>
              <li><a href="#">สรุปยอดขายรายวัน</a></li>
              <li><a href="#">สรุปยอดขายรายเดือน</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">รายงานสต๊อกสินค้า</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">รายงานลูกหนี้</a></li>
              <li><a href="#">รายงานเจ้าหนี้</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              ตั้งค่าพื้นฐาน
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/products') }}">รายการสินค้า</a></li>
              <li><a href="{{ url('/categories') }}">ประเภทสินค้า</a></li>
              <li><a href="#">คลังสินค้า/สาขา</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              ตั้งค่าระบบ
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        @endif

      </ul>

      <ul class="nav navbar-nav navbar-right">

        @if (Auth::guest())
          <li><a href="{{ url('/auth/login') }}">Login</a></li>
          <li><a href="{{ url('/auth/register') }}">Register</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
          </li>
        @endif

      </ul>
    </div>
  </div>
</nav>
