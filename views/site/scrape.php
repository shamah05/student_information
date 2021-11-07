<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\student\models\studentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Web Scraping';
$this->params['breadcrumbs'][] = $this->title;

// API
$api_url_covid = 'https://api.apify.com/v2/key-value-stores/moxA3Q0aZh5LosewB/records/LATEST?disableRedirect=true';

// Read JSON file
$json_data = file_get_contents($api_url_covid);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$data = $response_data->casesByState;
?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<div class="index">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">
                    <span id="cp"> Web Scraping for Covid Data on United States</span>
                    </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div>
                        <table id="cp-datatable" class="table table-bordered table-hover" width="100%" style="display: block;">
                            <thead>
                                <tr>
                                    <th>State</th>
                                    <th>Range</th>
                                    <th>Case Reported</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     foreach ($data as $item) { 
                                         echo    
                                             "<tr>
                                                 <td>" . $item->name . "</td>
                                                 <td>" . $item->range . "</td>
                                                 <td>" . $item->casesReported . "</td>
                                             </tr>";
                                     }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

var tablecp = $('#cp-datatable').DataTable({
            "columnDefs": [
                { "width": "25%", "targets": 0 },
                { "width": "25%", "targets": 1 },
                { "width": "25%", "targets": 2 },
            ],
            "order": [[ 1, "desc" ]],
            "fixedColumns": true,
            "scrollY":        "300px",
            "scrollCollapse": true,
            "paging":         false,
            "language": {
                search: "_INPUT_", //To remove Search Label
                searchPlaceholder: "Search..."
            },
        });
</script>