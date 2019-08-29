<?php

namespace Donsframe;

class Page extends Baseclass  {
  public function Setup($o) {
    $this->o = &$o;
    Debug::Set('Page setup initiated');

    Sql::SetQueryName('all_materials');
    Sql::ExecuteSql(' SELECT * FROM ron_material_list ORDER BY id ASC ; ');

    Sql::SetQueryName('all_sizes');
    Sql::ExecuteSql(' SELECT * FROM ron_size_list ORDER BY millimeters ASC ; ');

    Sql::SetQueryName('current_size');
    Sql::SetSql(' SELECT M.* ',1);
    Sql::SetSql(' FROM ron_materials_by_size S ',1);
    Sql::SetSql(' LEFT JOIN ron_material_list M ON M.id = S.material_id ',1);
    Sql::SetSql(' WHERE S.size_id = ' . $this->o->GetQs('size',0),1);
    Sql::SetSql(' ORDER BY M.material ASC ',1);
    Sql::SetSql(' ; ',1);
    Sql::Execute();


  }
}
