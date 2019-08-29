<?php

if ($this->GetQs('view') == '')
  include 'view_sizes.php';

if ($this->GetQs('view') == 'sizes')
  include 'view_sizes.php';

if ($this->GetQs('view') == 'materials')
  include 'view_materials.php';

if ($this->GetQs('view') == 'sizes_materials')
  include 'view_sizes_materials.php';
