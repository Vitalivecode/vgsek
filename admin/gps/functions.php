<?php
function publish_action($gps)
{
    if ($gps->get('primary'))
    {
        $db = GPS_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'1\' WHERE id = ' . (int)$gps->get('primary');
        $db->query($query);
    }
}
function unpublish_action($gps)
{
    if ($gps->get('primary'))
    {
        $db = GPS_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'0\' WHERE id = ' . (int)$gps->get('primary');
        $db->query($query);
    }
}

function exception_example($postdata, $primary, $gps)
{
    // get random field from $postdata
    $postdata_prepared = array_keys($postdata->to_array());
    shuffle($postdata_prepared);
    $random_field = array_shift($postdata_prepared);
    // set error message
    $gps->set_exception($random_field, 'This is a test error', 'error');
}

function test_column_callback($value, $fieldname, $primary, $row, $gps)
{
    return $value . ' - nice!';
}

function after_upload_example($field, $file_name, $file_path, $params, $gps)
{
    $ext = trim(strtolower(strrchr($file_name, '.')), '.');
    if ($ext != 'pdf' && $field == 'uploads.simple_upload')
    {
        unlink($file_path);
        $gps->set_exception('simple_upload', 'This is not PDF', 'error');
    }
}

function movetop($gps)
{
    if ($gps->get('primary') !== false)
    {
        $primary = (int)$gps->get('primary');
        $db = GPS_db::get_instance();
        $query = 'SELECT `officeCode` FROM `offices` ORDER BY `ordering`,`officeCode`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['officeCode'] == $primary && $key != 0)
            {
                array_splice($result, $key - 1, 0, array($item));
                unset($result[$key + 1]);
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `offices` SET `ordering` = ' . $key . ' WHERE officeCode = ' . $item['officeCode'];
            $db->query($query);
        }
    }
}
function movebottom($gps)
{
    if ($gps->get('primary') !== false)
    {
        $primary = (int)$gps->get('primary');
        $db = GPS_db::get_instance();
        $query = 'SELECT `officeCode` FROM `offices` ORDER BY `ordering`,`officeCode`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['officeCode'] == $primary && $key != $count - 1)
            {
                unset($result[$key]);
                array_splice($result, $key + 1, 0, array($item));
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `offices` SET `ordering` = ' . $key . ' WHERE officeCode = ' . $item['officeCode'];
            $db->query($query);
        }
    }
}

function show_description($value, $fieldname, $primary_key, $row, $gps)
{
    $result = '';
    if ($value == '1')
    {
        $result = '<i class="fa fa-check" />' . 'OK';
    }
    elseif ($value == '2')
    {
        $result = '<i class="fa fa-circle-o" />' . 'Pending';
    }
    return $result;
}

function custom_field($value, $fieldname, $primary_key, $row, $gps)
{
    return '<input type="text" readonly class="gps-input" name="' . $gps->fieldname_encode($fieldname) . '" value="' . $value .
        '" />';
}
function unset_val($postdata)
{
    $postdata->del('Paid');
}

function format_phone($new_phone)
{
    $new_phone = preg_replace("/[^0-9]/", "", $new_phone);

    if (strlen($new_phone) == 7)
        return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $new_phone);
    elseif (strlen($new_phone) == 10)
        return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $new_phone);
    else
        return $new_phone;
}

function before_list_example($list, $gps)
{
    var_dump($list);
}

function after_update_test($pd, $pm, $xc)
{
    $xc->search = 0;
}

function after_upload_test($field, &$filename, $file_path, $upload_config)
{
    $filename = 'bla-bla-bla';
}
function created_date($postdata, $gps)
{
    date_default_timezone_set("Asia/Kolkata");
    $postdata->set('createdDate', date('Y-m-d H:i:s'));
}
function modify_date($postdata, $gps)
{
    date_default_timezone_set("Asia/Kolkata");
    $postdata->set('modifiedDate', date('Y-m-d H:i:s'));
}
function delete_action($gps)
{
    if ($gps->get('primary'))
    {
        $db = GPS_db::get_instance();
        $query = 'UPDATE '.$gps->get('table').' SET `isActive` = b\'0\' WHERE id = ' . (int)$gps->get('primary');
        $db->query($query);
    }
}
function url($postdata, $gps)
{
    $db = gps_db::get_instance();
    $url = $postdata->get('url');
    if(!empty($url))
        $postdata->set('url', 'https://'.$url);
}