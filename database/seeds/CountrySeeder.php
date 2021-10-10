<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\GeneralSetup\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  Country::truncate();
        $countries = base_path('database/seeds/SqlFile/countries.sql');
        DB::unprepared(file_get_contents($countries)); */
        $countries = array(
            array('id' => '1','code' => 'US','name' => 'United States','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','code' => 'CA','name' => 'Canada','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','code' => 'AF','name' => 'Afghanistan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','code' => 'AL','name' => 'Albania','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','code' => 'DZ','name' => 'Algeria','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','code' => 'AS','name' => 'American Samoa','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','code' => 'AD','name' => 'Andorra','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','code' => 'AO','name' => 'Angola','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','code' => 'AI','name' => 'Anguilla','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','code' => 'AQ','name' => 'Antarctica','created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','code' => 'AG','name' => 'Antigua and/or Barbuda','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','code' => 'AR','name' => 'Argentina','created_at' => NULL,'updated_at' => NULL),
            array('id' => '13','code' => 'AM','name' => 'Armenia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '14','code' => 'AW','name' => 'Aruba','created_at' => NULL,'updated_at' => NULL),
            array('id' => '15','code' => 'AU','name' => 'Australia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '16','code' => 'AT','name' => 'Austria','created_at' => NULL,'updated_at' => NULL),
            array('id' => '17','code' => 'AZ','name' => 'Azerbaijan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '18','code' => 'BS','name' => 'Bahamas','created_at' => NULL,'updated_at' => NULL),
            array('id' => '19','code' => 'BH','name' => 'Bahrain','created_at' => NULL,'updated_at' => NULL),
            array('id' => '20','code' => 'BD','name' => 'Bangladesh','created_at' => NULL,'updated_at' => NULL),
            array('id' => '21','code' => 'BB','name' => 'Barbados','created_at' => NULL,'updated_at' => NULL),
            array('id' => '22','code' => 'BY','name' => 'Belarus','created_at' => NULL,'updated_at' => NULL),
            array('id' => '23','code' => 'BE','name' => 'Belgium','created_at' => NULL,'updated_at' => NULL),
            array('id' => '24','code' => 'BZ','name' => 'Belize','created_at' => NULL,'updated_at' => NULL),
            array('id' => '25','code' => 'BJ','name' => 'Benin','created_at' => NULL,'updated_at' => NULL),
            array('id' => '26','code' => 'BM','name' => 'Bermuda','created_at' => NULL,'updated_at' => NULL),
            array('id' => '27','code' => 'BT','name' => 'Bhutan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '28','code' => 'BO','name' => 'Bolivia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '29','code' => 'BA','name' => 'Bosnia and Herzegovina','created_at' => NULL,'updated_at' => NULL),
            array('id' => '30','code' => 'BW','name' => 'Botswana','created_at' => NULL,'updated_at' => NULL),
            array('id' => '31','code' => 'BV','name' => 'Bouvet Island','created_at' => NULL,'updated_at' => NULL),
            array('id' => '32','code' => 'BR','name' => 'Brazil','created_at' => NULL,'updated_at' => NULL),
            array('id' => '33','code' => 'IO','name' => 'British lndian Ocean Territory','created_at' => NULL,'updated_at' => NULL),
            array('id' => '34','code' => 'BN','name' => 'Brunei Darussalam','created_at' => NULL,'updated_at' => NULL),
            array('id' => '35','code' => 'BG','name' => 'Bulgaria','created_at' => NULL,'updated_at' => NULL),
            array('id' => '36','code' => 'BF','name' => 'Burkina Faso','created_at' => NULL,'updated_at' => NULL),
            array('id' => '37','code' => 'BI','name' => 'Burundi','created_at' => NULL,'updated_at' => NULL),
            array('id' => '38','code' => 'KH','name' => 'Cambodia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '39','code' => 'CM','name' => 'Cameroon','created_at' => NULL,'updated_at' => NULL),
            array('id' => '40','code' => 'CV','name' => 'Cape Verde','created_at' => NULL,'updated_at' => NULL),
            array('id' => '41','code' => 'KY','name' => 'Cayman Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '42','code' => 'CF','name' => 'Central African Republic','created_at' => NULL,'updated_at' => NULL),
            array('id' => '43','code' => 'TD','name' => 'Chad','created_at' => NULL,'updated_at' => NULL),
            array('id' => '44','code' => 'CL','name' => 'Chile','created_at' => NULL,'updated_at' => NULL),
            array('id' => '45','code' => 'CN','name' => 'China','created_at' => NULL,'updated_at' => NULL),
            array('id' => '46','code' => 'CX','name' => 'Christmas Island','created_at' => NULL,'updated_at' => NULL),
            array('id' => '47','code' => 'CC','name' => 'Cocos (Keeling) Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '48','code' => 'CO','name' => 'Colombia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '49','code' => 'KM','name' => 'Comoros','created_at' => NULL,'updated_at' => NULL),
            array('id' => '50','code' => 'CG','name' => 'Congo','created_at' => NULL,'updated_at' => NULL),
            array('id' => '51','code' => 'CK','name' => 'Cook Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '52','code' => 'CR','name' => 'Costa Rica','created_at' => NULL,'updated_at' => NULL),
            array('id' => '53','code' => 'HR','name' => 'Croatia (Hrvatska)','created_at' => NULL,'updated_at' => NULL),
            array('id' => '54','code' => 'CU','name' => 'Cuba','created_at' => NULL,'updated_at' => NULL),
            array('id' => '55','code' => 'CY','name' => 'Cyprus','created_at' => NULL,'updated_at' => NULL),
            array('id' => '56','code' => 'CZ','name' => 'Czech Republic','created_at' => NULL,'updated_at' => NULL),
            array('id' => '57','code' => 'CD','name' => 'Democratic Republic of Congo','created_at' => NULL,'updated_at' => NULL),
            array('id' => '58','code' => 'DK','name' => 'Denmark','created_at' => NULL,'updated_at' => NULL),
            array('id' => '59','code' => 'DJ','name' => 'Djibouti','created_at' => NULL,'updated_at' => NULL),
            array('id' => '60','code' => 'DM','name' => 'Dominica','created_at' => NULL,'updated_at' => NULL),
            array('id' => '61','code' => 'DO','name' => 'Dominican Republic','created_at' => NULL,'updated_at' => NULL),
            array('id' => '62','code' => 'TP','name' => 'East Timor','created_at' => NULL,'updated_at' => NULL),
            array('id' => '63','code' => 'EC','name' => 'Ecudaor','created_at' => NULL,'updated_at' => NULL),
            array('id' => '64','code' => 'EG','name' => 'Egypt','created_at' => NULL,'updated_at' => NULL),
            array('id' => '65','code' => 'SV','name' => 'El Salvador','created_at' => NULL,'updated_at' => NULL),
            array('id' => '66','code' => 'GQ','name' => 'Equatorial Guinea','created_at' => NULL,'updated_at' => NULL),
            array('id' => '67','code' => 'ER','name' => 'Eritrea','created_at' => NULL,'updated_at' => NULL),
            array('id' => '68','code' => 'EE','name' => 'Estonia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '69','code' => 'ET','name' => 'Ethiopia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '70','code' => 'FK','name' => 'Falkland Islands (Malvinas)','created_at' => NULL,'updated_at' => NULL),
            array('id' => '71','code' => 'FO','name' => 'Faroe Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '72','code' => 'FJ','name' => 'Fiji','created_at' => NULL,'updated_at' => NULL),
            array('id' => '73','code' => 'FI','name' => 'Finland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '74','code' => 'FR','name' => 'France','created_at' => NULL,'updated_at' => NULL),
            array('id' => '75','code' => 'FX','name' => 'France, Metropolitan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '76','code' => 'GF','name' => 'French Guiana','created_at' => NULL,'updated_at' => NULL),
            array('id' => '77','code' => 'PF','name' => 'French Polynesia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '78','code' => 'TF','name' => 'French Southern Territories','created_at' => NULL,'updated_at' => NULL),
            array('id' => '79','code' => 'GA','name' => 'Gabon','created_at' => NULL,'updated_at' => NULL),
            array('id' => '80','code' => 'GM','name' => 'Gambia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '81','code' => 'GE','name' => 'Georgia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '82','code' => 'DE','name' => 'Germany','created_at' => NULL,'updated_at' => NULL),
            array('id' => '83','code' => 'GH','name' => 'Ghana','created_at' => NULL,'updated_at' => NULL),
            array('id' => '84','code' => 'GI','name' => 'Gibraltar','created_at' => NULL,'updated_at' => NULL),
            array('id' => '85','code' => 'GR','name' => 'Greece','created_at' => NULL,'updated_at' => NULL),
            array('id' => '86','code' => 'GL','name' => 'Greenland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '87','code' => 'GD','name' => 'Grenada','created_at' => NULL,'updated_at' => NULL),
            array('id' => '88','code' => 'GP','name' => 'Guadeloupe','created_at' => NULL,'updated_at' => NULL),
            array('id' => '89','code' => 'GU','name' => 'Guam','created_at' => NULL,'updated_at' => NULL),
            array('id' => '90','code' => 'GT','name' => 'Guatemala','created_at' => NULL,'updated_at' => NULL),
            array('id' => '91','code' => 'GN','name' => 'Guinea','created_at' => NULL,'updated_at' => NULL),
            array('id' => '92','code' => 'GW','name' => 'Guinea-Bissau','created_at' => NULL,'updated_at' => NULL),
            array('id' => '93','code' => 'GY','name' => 'Guyana','created_at' => NULL,'updated_at' => NULL),
            array('id' => '94','code' => 'HT','name' => 'Haiti','created_at' => NULL,'updated_at' => NULL),
            array('id' => '95','code' => 'HM','name' => 'Heard and Mc Donald Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '96','code' => 'HN','name' => 'Honduras','created_at' => NULL,'updated_at' => NULL),
            array('id' => '97','code' => 'HK','name' => 'Hong Kong','created_at' => NULL,'updated_at' => NULL),
            array('id' => '98','code' => 'HU','name' => 'Hungary','created_at' => NULL,'updated_at' => NULL),
            array('id' => '99','code' => 'IS','name' => 'Iceland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '100','code' => 'IN','name' => 'India','created_at' => NULL,'updated_at' => NULL),
            array('id' => '101','code' => 'ID','name' => 'Indonesia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '102','code' => 'IR','name' => 'Iran (Islamic Republic of)','created_at' => NULL,'updated_at' => NULL),
            array('id' => '103','code' => 'IQ','name' => 'Iraq','created_at' => NULL,'updated_at' => NULL),
            array('id' => '104','code' => 'IE','name' => 'Ireland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '105','code' => 'IL','name' => 'Israel','created_at' => NULL,'updated_at' => NULL),
            array('id' => '106','code' => 'IT','name' => 'Italy','created_at' => NULL,'updated_at' => NULL),
            array('id' => '107','code' => 'CI','name' => 'Ivory Coast','created_at' => NULL,'updated_at' => NULL),
            array('id' => '108','code' => 'JM','name' => 'Jamaica','created_at' => NULL,'updated_at' => NULL),
            array('id' => '109','code' => 'JP','name' => 'Japan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '110','code' => 'JO','name' => 'Jordan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '111','code' => 'KZ','name' => 'Kazakhstan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '112','code' => 'KE','name' => 'Kenya','created_at' => NULL,'updated_at' => NULL),
            array('id' => '113','code' => 'KI','name' => 'Kiribati','created_at' => NULL,'updated_at' => NULL),
            array('id' => '114','code' => 'KP','name' => 'Democratic People\'s Republic of Korea','created_at' => NULL,'updated_at' => '2021-05-05 14:32:42'),
            array('id' => '115','code' => 'KR','name' => 'Republic of Korea','created_at' => NULL,'updated_at' => '2021-05-03 09:24:17'),
            array('id' => '116','code' => 'KW','name' => 'Kuwait','created_at' => NULL,'updated_at' => NULL),
            array('id' => '117','code' => 'KG','name' => 'Kyrgyzstan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '118','code' => 'LA','name' => 'Lao People\'s Democratic Republic','created_at' => NULL,'updated_at' => NULL),
            array('id' => '119','code' => 'LV','name' => 'Latvia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '120','code' => 'LB','name' => 'Lebanon','created_at' => NULL,'updated_at' => NULL),
            array('id' => '121','code' => 'LS','name' => 'Lesotho','created_at' => NULL,'updated_at' => NULL),
            array('id' => '122','code' => 'LR','name' => 'Liberia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '123','code' => 'LY','name' => 'Libyan Arab Jamahiriya','created_at' => NULL,'updated_at' => NULL),
            array('id' => '124','code' => 'LI','name' => 'Liechtenstein','created_at' => NULL,'updated_at' => NULL),
            array('id' => '125','code' => 'LT','name' => 'Lithuania','created_at' => NULL,'updated_at' => NULL),
            array('id' => '126','code' => 'LU','name' => 'Luxembourg','created_at' => NULL,'updated_at' => NULL),
            array('id' => '127','code' => 'MO','name' => 'Macau','created_at' => NULL,'updated_at' => NULL),
            array('id' => '128','code' => 'MK','name' => 'Macedonia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '129','code' => 'MG','name' => 'Madagascar','created_at' => NULL,'updated_at' => NULL),
            array('id' => '130','code' => 'MW','name' => 'Malawi','created_at' => NULL,'updated_at' => NULL),
            array('id' => '131','code' => 'MY','name' => 'Malaysia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '132','code' => 'MV','name' => 'Maldives','created_at' => NULL,'updated_at' => NULL),
            array('id' => '133','code' => 'ML','name' => 'Mali','created_at' => NULL,'updated_at' => NULL),
            array('id' => '134','code' => 'MT','name' => 'Malta','created_at' => NULL,'updated_at' => NULL),
            array('id' => '135','code' => 'MH','name' => 'Marshall Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '136','code' => 'MQ','name' => 'Martinique','created_at' => NULL,'updated_at' => NULL),
            array('id' => '137','code' => 'MR','name' => 'Mauritania','created_at' => NULL,'updated_at' => NULL),
            array('id' => '138','code' => 'MU','name' => 'Mauritius','created_at' => NULL,'updated_at' => NULL),
            array('id' => '139','code' => 'TY','name' => 'Mayotte','created_at' => NULL,'updated_at' => NULL),
            array('id' => '140','code' => 'MX','name' => 'Mexico','created_at' => NULL,'updated_at' => NULL),
            array('id' => '141','code' => 'FM','name' => 'Micronesia, Federated States of','created_at' => NULL,'updated_at' => NULL),
            array('id' => '142','code' => 'MD','name' => 'Moldova, Republic of','created_at' => NULL,'updated_at' => NULL),
            array('id' => '143','code' => 'MC','name' => 'Monaco','created_at' => NULL,'updated_at' => NULL),
            array('id' => '144','code' => 'MN','name' => 'Mongolia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '145','code' => 'MS','name' => 'Montserrat','created_at' => NULL,'updated_at' => NULL),
            array('id' => '146','code' => 'MA','name' => 'Morocco','created_at' => NULL,'updated_at' => NULL),
            array('id' => '147','code' => 'MZ','name' => 'Mozambique','created_at' => NULL,'updated_at' => NULL),
            array('id' => '148','code' => 'MM','name' => 'Myanmar','created_at' => NULL,'updated_at' => NULL),
            array('id' => '149','code' => 'NA','name' => 'Namibia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '150','code' => 'NR','name' => 'Nauru','created_at' => NULL,'updated_at' => NULL),
            array('id' => '151','code' => 'NP','name' => 'Nepal','created_at' => NULL,'updated_at' => NULL),
            array('id' => '152','code' => 'NL','name' => 'Netherlands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '153','code' => 'AN','name' => 'Netherlands Antilles','created_at' => NULL,'updated_at' => NULL),
            array('id' => '154','code' => 'NC','name' => 'New Caledonia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '155','code' => 'NZ','name' => 'New Zealand','created_at' => NULL,'updated_at' => NULL),
            array('id' => '156','code' => 'NI','name' => 'Nicaragua','created_at' => NULL,'updated_at' => NULL),
            array('id' => '157','code' => 'NE','name' => 'Niger','created_at' => NULL,'updated_at' => NULL),
            array('id' => '158','code' => 'NG','name' => 'Nigeria','created_at' => NULL,'updated_at' => NULL),
            array('id' => '159','code' => 'NU','name' => 'Niue','created_at' => NULL,'updated_at' => NULL),
            array('id' => '160','code' => 'NF','name' => 'Norfork Island','created_at' => NULL,'updated_at' => NULL),
            array('id' => '161','code' => 'MP','name' => 'Northern Mariana Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '162','code' => 'NO','name' => 'Norway','created_at' => NULL,'updated_at' => NULL),
            array('id' => '163','code' => 'OM','name' => 'Oman','created_at' => NULL,'updated_at' => NULL),
            array('id' => '164','code' => 'PK','name' => 'Pakistan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '165','code' => 'PW','name' => 'Palau','created_at' => NULL,'updated_at' => NULL),
            array('id' => '166','code' => 'PA','name' => 'Panama','created_at' => NULL,'updated_at' => NULL),
            array('id' => '167','code' => 'PG','name' => 'Papua New Guinea','created_at' => NULL,'updated_at' => NULL),
            array('id' => '168','code' => 'PY','name' => 'Paraguay','created_at' => NULL,'updated_at' => NULL),
            array('id' => '169','code' => 'PE','name' => 'Peru','created_at' => NULL,'updated_at' => NULL),
            array('id' => '170','code' => 'PH','name' => 'Philippines','created_at' => NULL,'updated_at' => NULL),
            array('id' => '171','code' => 'PN','name' => 'Pitcairn','created_at' => NULL,'updated_at' => NULL),
            array('id' => '172','code' => 'PL','name' => 'Poland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '173','code' => 'PT','name' => 'Portugal','created_at' => NULL,'updated_at' => NULL),
            array('id' => '174','code' => 'PR','name' => 'Puerto Rico','created_at' => NULL,'updated_at' => NULL),
            array('id' => '175','code' => 'QA','name' => 'Qatar','created_at' => NULL,'updated_at' => NULL),
            array('id' => '176','code' => 'SS','name' => 'Republic of South Sudan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '177','code' => 'RE','name' => 'Reunion','created_at' => NULL,'updated_at' => NULL),
            array('id' => '178','code' => 'RO','name' => 'Romania','created_at' => NULL,'updated_at' => NULL),
            array('id' => '179','code' => 'RU','name' => 'Russian Federation','created_at' => NULL,'updated_at' => NULL),
            array('id' => '180','code' => 'RW','name' => 'Rwanda','created_at' => NULL,'updated_at' => NULL),
            array('id' => '181','code' => 'KN','name' => 'Saint Kitts and Nevis','created_at' => NULL,'updated_at' => NULL),
            array('id' => '182','code' => 'LC','name' => 'Saint Lucia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '183','code' => 'VC','name' => 'Saint Vincent and the Grenadines','created_at' => NULL,'updated_at' => NULL),
            array('id' => '184','code' => 'WS','name' => 'Samoa','created_at' => NULL,'updated_at' => NULL),
            array('id' => '185','code' => 'SM','name' => 'San Marino','created_at' => NULL,'updated_at' => NULL),
            array('id' => '186','code' => 'ST','name' => 'Sao Tome and Principe','created_at' => NULL,'updated_at' => NULL),
            array('id' => '187','code' => 'SA','name' => 'Saudi Arabia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '188','code' => 'SN','name' => 'Senegal','created_at' => NULL,'updated_at' => NULL),
            array('id' => '189','code' => 'RS','name' => 'Serbia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '190','code' => 'SC','name' => 'Seychelles','created_at' => NULL,'updated_at' => NULL),
            array('id' => '191','code' => 'SL','name' => 'Sierra Leone','created_at' => NULL,'updated_at' => NULL),
            array('id' => '192','code' => 'SG','name' => 'Singapore','created_at' => NULL,'updated_at' => NULL),
            array('id' => '193','code' => 'SK','name' => 'Slovakia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '194','code' => 'SI','name' => 'Slovenia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '195','code' => 'SB','name' => 'Solomon Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '196','code' => 'SO','name' => 'Somalia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '197','code' => 'ZA','name' => 'South Africa','created_at' => NULL,'updated_at' => NULL),
            array('id' => '198','code' => 'GS','name' => 'South Georgia South Sandwich Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '199','code' => 'ES','name' => 'Spain','created_at' => NULL,'updated_at' => NULL),
            array('id' => '200','code' => 'LK','name' => 'Sri Lanka','created_at' => NULL,'updated_at' => NULL),
            array('id' => '201','code' => 'SH','name' => 'St. Helena','created_at' => NULL,'updated_at' => NULL),
            array('id' => '202','code' => 'PM','name' => 'St. Pierre and Miquelon','created_at' => NULL,'updated_at' => NULL),
            array('id' => '203','code' => 'SD','name' => 'Sudan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '204','code' => 'SR','name' => 'Suriname','created_at' => NULL,'updated_at' => NULL),
            array('id' => '205','code' => 'SJ','name' => 'Svalbarn and Jan Mayen Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '206','code' => 'SZ','name' => 'Swaziland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '207','code' => 'SE','name' => 'Sweden','created_at' => NULL,'updated_at' => NULL),
            array('id' => '208','code' => 'CH','name' => 'Switzerland','created_at' => NULL,'updated_at' => NULL),
            array('id' => '209','code' => 'SY','name' => 'Syrian Arab Republic','created_at' => NULL,'updated_at' => NULL),
            array('id' => '210','code' => 'TW','name' => 'Taiwan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '211','code' => 'TJ','name' => 'Tajikistan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '212','code' => 'TZ','name' => 'Tanzania, United Republic of','created_at' => NULL,'updated_at' => NULL),
            array('id' => '213','code' => 'TH','name' => 'Thailand','created_at' => NULL,'updated_at' => NULL),
            array('id' => '214','code' => 'TG','name' => 'Togo','created_at' => NULL,'updated_at' => NULL),
            array('id' => '215','code' => 'TK','name' => 'Tokelau','created_at' => NULL,'updated_at' => NULL),
            array('id' => '216','code' => 'TO','name' => 'Tonga','created_at' => NULL,'updated_at' => NULL),
            array('id' => '217','code' => 'TT','name' => 'Trinidad and Tobago','created_at' => NULL,'updated_at' => NULL),
            array('id' => '218','code' => 'TN','name' => 'Tunisia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '219','code' => 'TR','name' => 'Turkey','created_at' => NULL,'updated_at' => NULL),
            array('id' => '220','code' => 'TM','name' => 'Turkmenistan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '221','code' => 'TC','name' => 'Turks and Caicos Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '222','code' => 'TV','name' => 'Tuvalu','created_at' => NULL,'updated_at' => NULL),
            array('id' => '223','code' => 'UG','name' => 'Uganda','created_at' => NULL,'updated_at' => NULL),
            array('id' => '224','code' => 'UA','name' => 'Ukraine','created_at' => NULL,'updated_at' => NULL),
            array('id' => '225','code' => 'AE','name' => 'United Arab Emirates','created_at' => NULL,'updated_at' => NULL),
            array('id' => '226','code' => 'GB','name' => 'United Kingdom','created_at' => NULL,'updated_at' => NULL),
            array('id' => '227','code' => 'UM','name' => 'United States minor outlying islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '228','code' => 'UY','name' => 'Uruguay','created_at' => NULL,'updated_at' => NULL),
            array('id' => '229','code' => 'UZ','name' => 'Uzbekistan','created_at' => NULL,'updated_at' => NULL),
            array('id' => '230','code' => 'VU','name' => 'Vanuatu','created_at' => NULL,'updated_at' => NULL),
            array('id' => '231','code' => 'VA','name' => 'Vatican City State','created_at' => NULL,'updated_at' => NULL),
            array('id' => '232','code' => 'VE','name' => 'Venezuela','created_at' => NULL,'updated_at' => NULL),
            array('id' => '233','code' => 'VN','name' => 'Vietnam','created_at' => NULL,'updated_at' => NULL),
            array('id' => '234','code' => 'VG','name' => 'Virgin Islands (British)','created_at' => NULL,'updated_at' => NULL),
            array('id' => '235','code' => 'VI','name' => 'Virgin Islands (U.S.)','created_at' => NULL,'updated_at' => NULL),
            array('id' => '236','code' => 'WF','name' => 'Wallis and Futuna Islands','created_at' => NULL,'updated_at' => NULL),
            array('id' => '237','code' => 'EH','name' => 'Western Sahara','created_at' => NULL,'updated_at' => NULL),
            array('id' => '238','code' => 'YE','name' => 'Yemen','created_at' => NULL,'updated_at' => NULL),
            array('id' => '239','code' => 'YU','name' => 'Yugoslavia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '240','code' => 'ZR','name' => 'Zaire','created_at' => NULL,'updated_at' => NULL),
            array('id' => '241','code' => 'ZM','name' => 'Zambia','created_at' => NULL,'updated_at' => NULL),
            array('id' => '242','code' => 'ZW','name' => 'Zimbabwe','created_at' => NULL,'updated_at' => NULL)
          );

          Country::truncate();

          foreach($countries as $list) {
            Country::create($list);
          }
    }
}