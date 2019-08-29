<?php

namespace Donsframe;

class Page extends Baseclass  {
  public function Setup($o) {

    $this->o = &$o;
    Debug::Set('Page setup initiated');

    if (($this->o->GetQs('view') == 'sizes') && ($this->o->GetQs('action') == 'save')) {

      Sql::SetSql(" UPDATE ron_size_list ",1);
      Sql::SetSql(" SET fraction_in = '" . $this->o->GetQs('fraction_in') . "' , ",1);
      Sql::SetSql(" decimal_in = '" . $this->o->GetQs('decimal_in') . "' , ",1);
      Sql::SetSql(" millimeters = '" . $this->o->GetQs('millimeters') . "' , ",1);
      Sql::SetSql(" one_ball_weight_ounce = '" . $this->o->GetQs('one_ball_weight_ounce') . "' , ",1);
      Sql::SetSql(" one_ball_weight_gram = '" . $this->o->GetQs('one_ball_weight_gram') . "' " ,1);
      Sql::SetSql(" WHERE id = " . $this->o->GetQs('size_id'),1);
      Sql::SetSql(" ; ",1);
      Sql::Execute();

      // hack, lol. Need SetSqlNum and SetSqlStr, then add NULL support
      Sql::SetSql(" UPDATE ron_size_list SET fraction_in = NULL            WHERE fraction_in = '' ; ",1);
      Sql::SetSql(" UPDATE ron_size_list SET decimal_in = NULL             WHERE decimal_in = '' ; ",1);
      Sql::SetSql(" UPDATE ron_size_list SET millimeters = NULL            WHERE millimeters = '' ; ",1);
      Sql::SetSql(" UPDATE ron_size_list SET one_ball_weight_ounce = NULL  WHERE one_ball_weight_ounce = 0 ; ",1);
      Sql::SetSql(" UPDATE ron_size_list SET one_ball_weight_gram = NULL   WHERE one_ball_weight_gram = 0 ; ",1);
      Sql::Execute();

      header('location: ?index.php&page=Admin&view=sizes');

    }

    if (($this->o->GetQs('view') == 'sizes_materials') && ($this->o->GetQs('action') == 'add') && ($this->o->GetQs('material',0) > 0) && ($this->o->GetQs('size',0) > 0)) {
      Sql::SetQueryName('already_there');
      Sql::SetSql(' SELECT * ',1);
      Sql::SetSql(' FROM ron_materials_by_size MBS ',1);
      Sql::SetSql(' WHERE MBS.material_id = ' . $this->o->GetQs('material',0),1);
      Sql::SetSql(' AND MBS.size_id = ' . $this->o->GetQs('size',0),1);
      Sql::SetSql(' ORDER BY 1 ASC ',1);
      Sql::SetSql(' ; ',1);
      Sql::Execute();
      if (Data::GetRowCount('already_there') > 0) {
        header('location: ?index.php&page=Admin&view=sizes_materials&material=' . $this->o->GetQs('material',0));
        // TODO: redirect ALREADY THERE...
      } else {
        Sql::SetSql(' INSERT INTO ron_materials_by_size ( material_id, size_id ) VALUES ( ' . $this->o->GetQs('material',0) . ' , ' . $this->o->GetQs('size',0) . ') ; ');
        Sql::Execute();
        header('location: ?index.php&page=Admin&view=sizes_materials&material=' . $this->o->GetQs('material',0));
        // TODO: redirect ADDED RECORD
      }
    }

    Sql::SetQueryName('all_sizes');
    Sql::ExecuteSql(' SELECT * FROM ron_size_list ORDER BY millimeters ASC ; ');

    Sql::SetQueryName('all_materials');
    Sql::ExecuteSql(' SELECT * FROM ron_material_list ORDER BY id ASC ; ');

    if ($this->o->GetQs('view') == 'materials_sizes') {
      Sql::SetQueryName('current_size');
      Sql::SetSql(' SELECT M.material ',1);
      Sql::SetSql(' FROM ron_materials_by_size S ',1);
      Sql::SetSql(' LEFT JOIN ron_material_list M ON M.id = S.material_id ',1);
      Sql::SetSql(' WHERE S.size_id = ' . $this->o->GetQs('size',0),1);
      Sql::SetSql(' ORDER BY M.material ASC ',1);
      Sql::SetSql(' ; ',1);
      Sql::Execute();
    }

    if ($this->o->GetQs('view') == 'sizes_materials') {
      Sql::SetQueryName('current_material');
      Sql::SetSql(' SELECT SL.fraction_in, SL.decimal_in, SL.millimeters ',1);
      Sql::SetSql(' FROM ron_size_list SL  ',1);
      Sql::SetSql(' LEFT JOIN ron_materials_by_size MBS ON SL.id = MBS.size_id ',1);
      Sql::SetSql(' WHERE MBS.material_id = ' . $this->o->GetQs('material',0),1);
      Sql::SetSql(' ORDER BY SL.millimeters ASC ',1);
      Sql::SetSql(' ; ',1);
      Sql::Execute();
    }

  }
}
