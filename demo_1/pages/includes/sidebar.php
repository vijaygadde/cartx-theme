<?php

  // Text variables
  $messages = [
    'item_products' => 'Produtos',
    'item_products_new' => 'Novo Produto',
    'item_products_list' => 'Listar Produtos',
    'item_products_report' => 'Relatórios de Produtos',
    'item_products_categories' => 'Categorias',
  ];

?>

<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="dashboard-one.html" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" role="button" aria-expanded="false" aria-controls="products">
              <i class="link-icon" data-feather="shopping-bag"></i>
              <span class="link-title"><?php echo $messages['item_products']; ?></span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/products/new.php" class="nav-link"><?php echo $messages['item_products_new']; ?></a>
                </li>
                <li class="nav-item">
                  <a href="pages/products/categories.php" class="nav-link"><?php echo $messages['item_products_categories']; ?></a>
                </li>
                <li class="nav-item">
                  <a href="pages/products/list.php" class="nav-link"><?php echo $messages['item_products_list']; ?></a>
                </li>
                <li class="nav-item">
                  <a href="pages/products/report.php" class="nav-link"><?php echo $messages['item_products_report']; ?></a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>