<?php

/*Summary of action
1: wp_control knows of each action
2: Each action triggers a category check
3: wp_control know what time to run each check
4: WP Cron ONLY if a visitor visits the site
5: https://cron-job.org Visits the site they the magic happends
*/

add_action('regional_check_business', 'CS_category_business');
add_action('regional_check_education', 'CS_category_education');
add_action('regional_check_leisure', 'CS_category_leisure');
add_action('regional_check_motors', 'CS_category_motors');

add_action('regional_check_property', 'CS_category_property');
add_action('regional_check_recruitment', 'CS_category_recruitment');
add_action('regional_check_carpets_flooring', 'CS_category_carpets_flooring');
add_action('regional_check_electrical', 'CS_category_electrical');

add_action('regional_check_furniture_home', 'CS_category_furniture_home');
add_action('regional_check_glazing', 'CS_category_glazing');
add_action('regional_check_kitchens_bedrooms_bathrooms', 'CS_category_kitchens_bedrooms_bathrooms');
add_action('regional_check_business_services', 'CS_category_services');

// Business category Check
function CS_category_business() {

  //Category Arguments
  $business_args = array(
    'post_type'         => 'product',
    'post_status'       => 'publish',
    'posts_per_page'    => -1,
    'tax_query' => array(
      array(
        'taxonomy' 			=> 'product_cat',
        'field' 				=> 'slug',
        'terms' 				=> array('business'),
      )
    )
  );

  $business_loop = get_posts($business_args);

  //Build a list of in stock region
  foreach ($business_loop as $business) {

    $product_s = wc_get_product($business->ID);
    $product_variations = $product_s->get_available_variations();

    foreach ($product_variations as $variation) {
      $product_region = $variation['attributes']['attribute_pa_regions'];

      //Add in stock product too an array for count check
      if('bedford' === $product_region && $variation['is_in_stock']) {
        $business_bedford_stock[] = $business->post_title;
      }

      if('bristol' === $product_region && $variation['is_in_stock']) {
        $business_bristol_stock[] = $business->post_title;
      }

      if('birmingham' === $product_region && $variation['is_in_stock']) {
        $business_birmingham_stock[] = $business->post_title;
      }

      if('cambridge' === $product_region && $variation['is_in_stock']) {
        $business_cambridge_stock[] = $business->post_title;
      }

      if('cheltenham' === $product_region && $variation['is_in_stock']) {
        $business_cheltenham_stock[] = $business->post_title;
      }

      if('cardiff' === $product_region && $variation['is_in_stock']) {
        $business_cardiff_stock[] = $business->post_title;
      }

      if('chester' === $product_region && $variation['is_in_stock']) {
        $business_chester_stock[] = $business->post_title;
      }

      if('coventry' === $product_region && $variation['is_in_stock']) {
        $business_coventry_stock[] = $business->post_title;
      }

      if('derby' === $product_region && $variation['is_in_stock']) {
        $business_derby_stock[] = $business->post_title;
      }

      if('exeter' === $product_region && $variation['is_in_stock']) {
        $business_exeter_stock[] = $business->post_title;
      }

      if('gloucester' === $product_region && $variation['is_in_stock']) {
        $business_gloucester_stock[] = $business->post_title;
      }

      if('grimsby' === $product_region && $variation['is_in_stock']) {
        $business_grimsby_stock[] = $business->post_title;
      }

      if('guildford' === $product_region && $variation['is_in_stock']) {
        $business_guildford_stock[] = $business->post_title;
      }

      if('hertford' === $product_region && $variation['is_in_stock']) {
        $business_hertford_stock[] = $business->post_title;
      }

      if('huddersfield' === $product_region && $variation['is_in_stock']) {
        $business_huddersfield_stock[] = $business->post_title;
      }

      if('hull' === $product_region && $variation['is_in_stock']) {
        $business_hull_stock[] = $business->post_title;
      }

      if('leicester' === $product_region && $variation['is_in_stock']) {
        $business_leicester_stock[] = $business->post_title;
      }

      if('lincoln' === $product_region && $variation['is_in_stock']) {
        $business_lincoln_stock[] = $business->post_title;
      }

      if('liverpool' === $product_region && $variation['is_in_stock']) {
        $business_liverpool_stock[] = $business->post_title;
      }

      if('llandudno' === $product_region && $variation['is_in_stock']) {
        $business_llandudno_stock[] = $business->post_title;
      }

      if('manchester' === $product_region && $variation['is_in_stock']) {
        $business_manchester_stock[] = $business->post_title;
      }

      if('newcastle' === $product_region && $variation['is_in_stock']) {
        $business_newcastle_stock[] = $business->post_title;
      }

      if('nottingham' === $product_region && $variation['is_in_stock']) {
        $business_nottingham_stock[] = $business->post_title;
      }

      if('plymouth' === $product_region && $variation['is_in_stock']) {
        $business_plymouth_stock[] = $business->post_title;
      }

      if('scunthorpe' === $product_region && $variation['is_in_stock']) {
        $business_scunthorpe_stock[] = $business->post_title;
      }

      if('stoke' === $product_region && $variation['is_in_stock']) {
        $business_stoke_stock[] = $business->post_title;
      }

      if('swansea' === $product_region && $variation['is_in_stock']) {
        $business_swansea_stock[] = $business->post_title;
      }

      if('tamworth' === $product_region && $variation['is_in_stock']) {
        $business_tamworth_stock[] = $business->post_title;
      }

      if('teeside' === $product_region && $variation['is_in_stock']) {
        $business_teeside_stock[] = $business->post_title;
      }

      if('torquay' === $product_region && $variation['is_in_stock']) {
        $business_torquay_stock[] = $business->post_title;
      }

      if('truro' === $product_region && $variation['is_in_stock']) {
        $business_truro_stock[] = $business->post_title;
      }

      if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
        $business_tunbridge_wells_stock[] = $business->post_title;
      }

      if('watford' === $product_region && $variation['is_in_stock']) {
        $business_watford_stock[] = $business->post_title;
      }

      if('yeovil' === $product_region && $variation['is_in_stock']) {
        $business_yeovil_stock[] = $business->post_title;
      }

    }
  }

  if(count($business_bedford_stock) < 36 || count($business_bristol_stock) < 36 || count($business_birmingham_stock) < 36 || count($business_cambridge_stock) < 36 || count($business_cheltenham_stock) < 36 || count($business_cardiff_stock) < 36 || count($business_chester_stock) < 36 || count($business_coventry_stock) < 36 || count($business_derby_stock) < 36 || count($business_exeter_stock) < 36 || count($business_gloucester_stock) < 36 || count($business_grimsby_stock) < 36 || count($business_guildford_stock) < 36 || count($business_hertford_stock) < 36 || count($business_huddersfield_stock) < 36 || count($business_hull_stock) < 36 || count($business_leicester_stock) < 36 || count($business_lincoln_stock) < 36 || count($business_liverpool_stock) < 36 || count($business_llandudno_stock) < 36 || count($business_manchester_stock) < 36 || count($business_newcastle_stock) < 36 || count($business_nottingham_stock) < 36 || count($business_plymouth_stock) < 36 || count($business_scunthorpe_stock) < 36 || count($business_stoke_stock) < 36 || count($business_swansea_stock) < 36 || count($business_tamworth_stock) < 36 || count($business_teeside_stock) < 36 || count($business_torquay_stock) < 36 || count($business_truro_stock) < 36 || count($business_tunbridge_wells_stock) < 36 || count($business_watford_stock) < 36 || count($business_yeovil_stock) < 36) {

    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Business</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($business_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($business_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($business_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($business_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($business_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($business_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($business_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($business_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($business_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($business_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($business_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($business_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($business_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($business_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($business_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($business_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($business_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($business_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($business_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($business_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($business_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($business_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($business_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($business_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($business_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($business_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($business_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($business_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($business_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($business_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($business_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($business_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($business_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($business_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($business_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Business', $message, $headers);

  }

}

// Education category check
function CS_category_education() {
  $education_args = array(
    'post_type'         => 'product',
    'post_status'       => 'publish',
    'posts_per_page'    => -1,
    'tax_query' => array(
      array(
        'taxonomy' 			=> 'product_cat',
        'field' 				=> 'slug',
        'terms' 				=> array('education'),
      )
    )
  );

  $education_loop = get_posts($education_args);

  foreach ($education_loop as $education) {

    $product_s = wc_get_product($education->ID);
    $product_variations = $product_s->get_available_variations();

    foreach ($product_variations as $variation) {
      $product_region = $variation['attributes']['attribute_pa_regions'];

      if('bedford' === $product_region && $variation['is_in_stock']) {
        $education_bedford_stock[] = $education->post_title;
      }

      if('bristol' === $product_region && $variation['is_in_stock']) {
        $education_bristol_stock[] = $education->post_title;
      }

      if('birmingham' === $product_region && $variation['is_in_stock']) {
        $education_birmingham_stock[] = $education->post_title;
      }

      if('cambridge' === $product_region && $variation['is_in_stock']) {
        $education_cambridge_stock[] = $education->post_title;
      }

      if('cheltenham' === $product_region && $variation['is_in_stock']) {
        $education_cheltenham_stock[] = $education->post_title;
      }

      if('cardiff' === $product_region && $variation['is_in_stock']) {
        $education_cardiff_stock[] = $education->post_title;
      }

      if('chester' === $product_region && $variation['is_in_stock']) {
        $education_chester_stock[] = $education->post_title;
      }

      if('coventry' === $product_region && $variation['is_in_stock']) {
        $education_coventry_stock[] = $education->post_title;
      }

      if('derby' === $product_region && $variation['is_in_stock']) {
        $education_derby_stock[] = $education->post_title;
      }

      if('exeter' === $product_region && $variation['is_in_stock']) {
        $education_exeter_stock[] = $education->post_title;
      }

      if('gloucester' === $product_region && $variation['is_in_stock']) {
        $education_gloucester_stock[] = $education->post_title;
      }

      if('grimsby' === $product_region && $variation['is_in_stock']) {
        $education_grimsby_stock[] = $education->post_title;
      }

      if('guildford' === $product_region && $variation['is_in_stock']) {
        $education_guildford_stock[] = $education->post_title;
      }

      if('hertford' === $product_region && $variation['is_in_stock']) {
        $education_hertford_stock[] = $education->post_title;
      }

      if('huddersfield' === $product_region && $variation['is_in_stock']) {
        $education_huddersfield_stock[] = $education->post_title;
      }

      if('hull' === $product_region && $variation['is_in_stock']) {
        $education_hull_stock[] = $education->post_title;
      }

      if('leicester' === $product_region && $variation['is_in_stock']) {
        $education_leicester_stock[] = $education->post_title;
      }

      if('lincoln' === $product_region && $variation['is_in_stock']) {
        $education_lincoln_stock[] = $education->post_title;
      }

      if('liverpool' === $product_region && $variation['is_in_stock']) {
        $education_liverpool_stock[] = $education->post_title;
      }

      if('llandudno' === $product_region && $variation['is_in_stock']) {
        $education_llandudno_stock[] = $education->post_title;
      }

      if('manchester' === $product_region && $variation['is_in_stock']) {
        $education_manchester_stock[] = $education->post_title;
      }

      if('newcastle' === $product_region && $variation['is_in_stock']) {
        $education_newcastle_stock[] = $education->post_title;
      }

      if('nottingham' === $product_region && $variation['is_in_stock']) {
        $education_nottingham_stock[] = $education->post_title;
      }

      if('plymouth' === $product_region && $variation['is_in_stock']) {
        $education_plymouth_stock[] = $education->post_title;
      }

      if('scunthorpe' === $product_region && $variation['is_in_stock']) {
        $education_scunthorpe_stock[] = $education->post_title;
      }

      if('stoke' === $product_region && $variation['is_in_stock']) {
        $education_stoke_stock[] = $education->post_title;
      }

      if('swansea' === $product_region && $variation['is_in_stock']) {
        $education_swansea_stock[] = $education->post_title;
      }

      if('tamworth' === $product_region && $variation['is_in_stock']) {
        $education_tamworth_stock[] = $education->post_title;
      }

      if('teeside' === $product_region && $variation['is_in_stock']) {
        $education_teeside_stock[] = $education->post_title;
      }

      if('torquay' === $product_region && $variation['is_in_stock']) {
        $education_torquay_stock[] = $education->post_title;
      }

      if('truro' === $product_region && $variation['is_in_stock']) {
        $education_truro_stock[] = $education->post_title;
      }

      if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
        $education_tunbridge_wells_stock[] = $education->post_title;
      }

      if('watford' === $product_region && $variation['is_in_stock']) {
        $education_watford_stock[] = $education->post_title;
      }

      if('yeovil' === $product_region && $variation['is_in_stock']) {
        $education_yeovil_stock[] = $education->post_title;
      }

    }
  }

    if(count($education_bedford_stock) < 36 || count($education_bristol_stock) < 36 || count($education_birmingham_stock) < 36 || count($education_cambridge_stock) < 36 || count($education_cheltenham_stock) < 36 || count($education_cardiff_stock) < 36 || count($education_chester_stock) < 36 || count($education_coventry_stock) < 36 || count($education_derby_stock) < 36 || count($education_exeter_stock) < 36 || count($education_gloucester_stock) < 36 || count($education_grimsby_stock) < 36 || count($education_guildford_stock) < 36 || count($education_hertford_stock) < 36 || count($education_huddersfield_stock) < 36 || count($education_hull_stock) < 36 || count($education_leicester_stock) < 36 || count($education_lincoln_stock) < 36 || count($education_liverpool_stock) < 36 || count($education_llandudno_stock) < 36 || count($education_manchester_stock) < 36 || count($education_newcastle_stock) < 36 || count($education_nottingham_stock) < 36 || count($education_plymouth_stock) < 36 || count($education_scunthorpe_stock) < 36 || count($education_stoke_stock) < 36 || count($education_swansea_stock) < 36 || count($education_tamworth_stock) < 36 || count($education_teeside_stock) < 36 || count($education_torquay_stock) < 36 || count($education_truro_stock) < 36 || count($education_tunbridge_wells_stock) < 36 || count($education_watford_stock) < 36 || count($education_yeovil_stock) < 36) {
    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Education</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($education_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($education_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($education_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($education_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($education_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($education_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($education_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($education_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($education_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($education_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($education_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($education_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($education_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($education_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($education_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($education_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($education_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($education_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($education_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($education_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($education_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($education_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($education_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($education_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($education_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($education_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($education_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($education_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($education_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($education_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($education_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($education_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($education_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($education_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($education_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Education', $message, $headers);

  }
}

// Leisure category check
function CS_category_leisure() {

  $leisure_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('leisure'),
  		)
  	)
  );

  $leisure_loop = get_posts($leisure_args);

  foreach ($leisure_loop as $leisure) {

  	$product_s = wc_get_product($leisure->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$leisure_bedford_stock[] = $leisure->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$leisure_bristol_stock[] = $leisure->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$leisure_birmingham_stock[] = $leisure->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$leisure_cambridge_stock[] = $leisure->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$leisure_cheltenham_stock[] = $leisure->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$leisure_cardiff_stock[] = $leisure->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$leisure_chester_stock[] = $leisure->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$leisure_coventry_stock[] = $leisure->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$leisure_derby_stock[] = $leisure->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$leisure_exeter_stock[] = $leisure->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$leisure_gloucester_stock[] = $leisure->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$leisure_grimsby_stock[] = $leisure->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$leisure_guildford_stock[] = $leisure->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$leisure_hertford_stock[] = $leisure->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$leisure_huddersfield_stock[] = $leisure->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$leisure_hull_stock[] = $leisure->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$leisure_leicester_stock[] = $leisure->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$leisure_lincoln_stock[] = $leisure->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$leisure_liverpool_stock[] = $leisure->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$leisure_llandudno_stock[] = $leisure->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$leisure_manchester_stock[] = $leisure->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$leisure_newcastle_stock[] = $leisure->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$leisure_nottingham_stock[] = $leisure->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$leisure_plymouth_stock[] = $leisure->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$leisure_scunthorpe_stock[] = $leisure->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$leisure_stoke_stock[] = $leisure->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$leisure_swansea_stock[] = $leisure->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$leisure_tamworth_stock[] = $leisure->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$leisure_teeside_stock[] = $leisure->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$leisure_torquay_stock[] = $leisure->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$leisure_truro_stock[] = $leisure->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$leisure_tunbridge_wells_stock[] = $leisure->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$leisure_watford_stock[] = $leisure->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$leisure_yeovil_stock[] = $leisure->post_title;
  		}

  	}
  }
  // leisure Category

  if(count($leisure_bedford_stock) < 36 || count($leisure_bristol_stock) < 36 || count($leisure_birmingham_stock) < 36 || count($leisure_cambridge_stock) < 36 || count($leisure_cheltenham_stock) < 36 || count($leisure_cardiff_stock) < 36 || count($leisure_chester_stock) < 36 || count($leisure_coventry_stock) < 36 || count($leisure_derby_stock) < 36 || count($leisure_exeter_stock) < 36 || count($leisure_gloucester_stock) < 36 || count($leisure_grimsby_stock) < 36 || count($leisure_guildford_stock) < 36 || count($leisure_hertford_stock) < 36 || count($leisure_huddersfield_stock) < 36 || count($leisure_hull_stock) < 36 || count($leisure_leicester_stock) < 36 || count($leisure_lincoln_stock) < 36 || count($leisure_liverpool_stock) < 36 || count($leisure_llandudno_stock) < 36 || count($leisure_manchester_stock) < 36 || count($leisure_newcastle_stock) < 36 || count($leisure_nottingham_stock) < 36 || count($leisure_plymouth_stock) < 36 || count($leisure_scunthorpe_stock) < 36 || count($leisure_stoke_stock) < 36 || count($leisure_swansea_stock) < 36 || count($leisure_tamworth_stock) < 36 || count($leisure_teeside_stock) < 36 || count($leisure_torquay_stock) < 36 || count($leisure_truro_stock) < 36 || count($leisure_tunbridge_wells_stock) < 36 || count($leisure_watford_stock) < 36 || count($leisure_yeovil_stock) < 36) {
    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Leisure</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($leisure_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($leisure_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($leisure_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($leisure_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($leisure_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($leisure_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($leisure_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($leisure_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($leisure_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($leisure_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($leisure_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($leisure_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($leisure_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($leisure_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($leisure_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($leisure_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($leisure_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($leisure_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($leisure_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($leisure_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($leisure_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($leisure_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($leisure_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($leisure_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($leisure_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($leisure_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($leisure_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($leisure_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($leisure_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($leisure_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($leisure_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($leisure_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($leisure_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($leisure_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($leisure_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Leisure', $message, $headers);

  }
}

// Motors category check
function CS_category_motors() {

  $motors_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('motors'),
  		)
  	)
  );

  $motors_loop = get_posts($motors_args);

  foreach ($motors_loop as $motors) {

  	$product_s = wc_get_product($motors->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$motors_bedford_stock[] = $motors->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$motors_bristol_stock[] = $motors->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$motors_birmingham_stock[] = $motors->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$motors_cambridge_stock[] = $motors->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$motors_cheltenham_stock[] = $motors->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$motors_cardiff_stock[] = $motors->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$motors_chester_stock[] = $motors->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$motors_coventry_stock[] = $motors->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$motors_derby_stock[] = $motors->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$motors_exeter_stock[] = $motors->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$motors_gloucester_stock[] = $motors->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$motors_grimsby_stock[] = $motors->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$motors_guildford_stock[] = $motors->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$motors_hertford_stock[] = $motors->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$motors_huddersfield_stock[] = $motors->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$motors_hull_stock[] = $motors->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$motors_leicester_stock[] = $motors->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$motors_lincoln_stock[] = $motors->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$motors_liverpool_stock[] = $motors->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$motors_llandudno_stock[] = $motors->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$motors_manchester_stock[] = $motors->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$motors_newcastle_stock[] = $motors->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$motors_nottingham_stock[] = $motors->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$motors_plymouth_stock[] = $motors->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$motors_scunthorpe_stock[] = $motors->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$motors_stoke_stock[] = $motors->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$motors_swansea_stock[] = $motors->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$motors_tamworth_stock[] = $motors->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$motors_teeside_stock[] = $motors->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$motors_torquay_stock[] = $motors->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$motors_truro_stock[] = $motors->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$motors_tunbridge_wells_stock[] = $motors->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$motors_watford_stock[] = $motors->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$motors_yeovil_stock[] = $motors->post_title;
  		}

  	}
  }
  // motors Category

    if(count($motors_bedford_stock) < 36 || count($motors_bristol_stock) < 36 || count($motors_birmingham_stock) < 36 || count($motors_cambridge_stock) < 36 || count($motors_cheltenham_stock) < 36 || count($motors_cardiff_stock) < 36 || count($motors_chester_stock) < 36 || count($motors_coventry_stock) < 36 || count($motors_derby_stock) < 36 || count($motors_exeter_stock) < 36 || count($motors_gloucester_stock) < 36 || count($motors_grimsby_stock) < 36 || count($motors_guildford_stock) < 36 || count($motors_hertford_stock) < 36 || count($motors_huddersfield_stock) < 36 || count($motors_hull_stock) < 36 || count($motors_leicester_stock) < 36 || count($motors_lincoln_stock) < 36 || count($motors_liverpool_stock) < 36 || count($motors_llandudno_stock) < 36 || count($motors_manchester_stock) < 36 || count($motors_newcastle_stock) < 36 || count($motors_nottingham_stock) < 36 || count($motors_plymouth_stock) < 36 || count($motors_scunthorpe_stock) < 36 || count($motors_stoke_stock) < 36 || count($motors_swansea_stock) < 36 || count($motors_tamworth_stock) < 36 || count($motors_teeside_stock) < 36 || count($motors_torquay_stock) < 36 || count($motors_truro_stock) < 36 || count($motors_tunbridge_wells_stock) < 36 || count($motors_watford_stock) < 36 || count($motors_yeovil_stock) < 36) {
    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Motors</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($motors_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($motors_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($motors_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($motors_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($motors_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($motors_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($motors_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($motors_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($motors_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($motors_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($motors_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($motors_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($motors_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($motors_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($motors_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($motors_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($motors_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($motors_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($motors_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($motors_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($motors_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($motors_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($motors_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($motors_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($motors_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($motors_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($motors_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($motors_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($motors_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($motors_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($motors_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($motors_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($motors_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($motors_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($motors_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Motors', $message, $headers);

  }
}

// Property category check
function CS_category_property() {

  $property_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('property'),
  		)
  	)
  );

  $property_loop = get_posts($property_args);

  foreach ($property_loop as $property) {

  	$product_s = wc_get_product($property->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$property_bedford_stock[] = $property->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$property_bristol_stock[] = $property->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$property_birmingham_stock[] = $property->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$property_cambridge_stock[] = $property->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$property_cheltenham_stock[] = $property->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$property_cardiff_stock[] = $property->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$property_chester_stock[] = $property->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$property_coventry_stock[] = $property->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$property_derby_stock[] = $property->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$property_exeter_stock[] = $property->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$property_gloucester_stock[] = $property->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$property_grimsby_stock[] = $property->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$property_guildford_stock[] = $property->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$property_hertford_stock[] = $property->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$property_huddersfield_stock[] = $property->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$property_hull_stock[] = $property->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$property_leicester_stock[] = $property->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$property_lincoln_stock[] = $property->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$property_liverpool_stock[] = $property->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$property_llandudno_stock[] = $property->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$property_manchester_stock[] = $property->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$property_newcastle_stock[] = $property->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$property_nottingham_stock[] = $property->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$property_plymouth_stock[] = $property->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$property_scunthorpe_stock[] = $property->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$property_stoke_stock[] = $property->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$property_swansea_stock[] = $property->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$property_tamworth_stock[] = $property->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$property_teeside_stock[] = $property->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$property_torquay_stock[] = $property->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$property_truro_stock[] = $property->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$property_tunbridge_wells_stock[] = $property->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$property_watford_stock[] = $property->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$property_yeovil_stock[] = $property->post_title;
  		}

  	}
  }
  // property Category

    if(count($property_bedford_stock) < 36 || count($property_bristol_stock) < 36 || count($property_birmingham_stock) < 36 || count($property_cambridge_stock) < 36 || count($property_cheltenham_stock) < 36 || count($property_cardiff_stock) < 36 || count($property_chester_stock) < 36 || count($property_coventry_stock) < 36 || count($property_derby_stock) < 36 || count($property_exeter_stock) < 36 || count($property_gloucester_stock) < 36 || count($property_grimsby_stock) < 36 || count($property_guildford_stock) < 36 || count($property_hertford_stock) < 36 || count($property_huddersfield_stock) < 36 || count($property_hull_stock) < 36 || count($property_leicester_stock) < 36 || count($property_lincoln_stock) < 36 || count($property_liverpool_stock) < 36 || count($property_llandudno_stock) < 36 || count($property_manchester_stock) < 36 || count($property_newcastle_stock) < 36 || count($property_nottingham_stock) < 36 || count($property_plymouth_stock) < 36 || count($property_scunthorpe_stock) < 36 || count($property_stoke_stock) < 36 || count($property_swansea_stock) < 36 || count($property_tamworth_stock) < 36 || count($property_teeside_stock) < 36 || count($property_torquay_stock) < 36 || count($property_truro_stock) < 36 || count($property_tunbridge_wells_stock) < 36 || count($property_watford_stock) < 36 || count($property_yeovil_stock) < 36) {

    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Property</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($property_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($property_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($property_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($property_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($property_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($property_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($property_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($property_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($property_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($property_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($property_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($property_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($property_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($property_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($property_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($property_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($property_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($property_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($property_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($property_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($property_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($property_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($property_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($property_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($property_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($property_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($property_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($property_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($property_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($property_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($property_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($property_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($property_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($property_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($property_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Property', $message, $headers);

  }

}

// Recruitment category check
function CS_category_recruitment() {

  $recruitment_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('recruitment'),
  		)
  	)
  );

  $recruitment_loop = get_posts($recruitment_args);

  foreach ($recruitment_loop as $recruitment) {

  	$product_s = wc_get_product($recruitment->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$recruitment_bedford_stock[] = $recruitment->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$recruitment_bristol_stock[] = $recruitment->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$recruitment_birmingham_stock[] = $recruitment->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$recruitment_cambridge_stock[] = $recruitment->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$recruitment_cheltenham_stock[] = $recruitment->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$recruitment_cardiff_stock[] = $recruitment->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$recruitment_chester_stock[] = $recruitment->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$recruitment_coventry_stock[] = $recruitment->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$recruitment_derby_stock[] = $recruitment->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$recruitment_exeter_stock[] = $recruitment->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$recruitment_gloucester_stock[] = $recruitment->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$recruitment_grimsby_stock[] = $recruitment->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$recruitment_guildford_stock[] = $recruitment->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$recruitment_hertford_stock[] = $recruitment->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$recruitment_huddersfield_stock[] = $recruitment->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$recruitment_hull_stock[] = $recruitment->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$recruitment_leicester_stock[] = $recruitment->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$recruitment_lincoln_stock[] = $recruitment->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$recruitment_liverpool_stock[] = $recruitment->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$recruitment_llandudno_stock[] = $recruitment->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$recruitment_manchester_stock[] = $recruitment->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$recruitment_newcastle_stock[] = $recruitment->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$recruitment_nottingham_stock[] = $recruitment->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$recruitment_plymouth_stock[] = $recruitment->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$recruitment_scunthorpe_stock[] = $recruitment->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$recruitment_stoke_stock[] = $recruitment->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$recruitment_swansea_stock[] = $recruitment->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$recruitment_tamworth_stock[] = $recruitment->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$recruitment_teeside_stock[] = $recruitment->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$recruitment_torquay_stock[] = $recruitment->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$recruitment_truro_stock[] = $recruitment->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$recruitment_tunbridge_wells_stock[] = $recruitment->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$recruitment_watford_stock[] = $recruitment->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$recruitment_yeovil_stock[] = $recruitment->post_title;
  		}

  	}
  }
  // recruitment Category

    if(count($recruitment_bedford_stock) < 36 || count($recruitment_bristol_stock) < 36 || count($recruitment_birmingham_stock) < 36 || count($recruitment_cambridge_stock) < 36 || count($recruitment_cheltenham_stock) < 36 || count($recruitment_cardiff_stock) < 36 || count($recruitment_chester_stock) < 36 || count($recruitment_coventry_stock) < 36 || count($recruitment_derby_stock) < 36 || count($recruitment_exeter_stock) < 36 || count($recruitment_gloucester_stock) < 36 || count($recruitment_grimsby_stock) < 36 || count($recruitment_guildford_stock) < 36 || count($recruitment_hertford_stock) < 36 || count($recruitment_huddersfield_stock) < 36 || count($recruitment_hull_stock) < 36 || count($recruitment_leicester_stock) < 36 || count($recruitment_lincoln_stock) < 36 || count($recruitment_liverpool_stock) < 36 || count($recruitment_llandudno_stock) < 36 || count($recruitment_manchester_stock) < 36 || count($recruitment_newcastle_stock) < 36 || count($recruitment_nottingham_stock) < 36 || count($recruitment_plymouth_stock) < 36 || count($recruitment_scunthorpe_stock) < 36 || count($recruitment_stoke_stock) < 36 || count($recruitment_swansea_stock) < 36 || count($recruitment_tamworth_stock) < 36 || count($recruitment_teeside_stock) < 36 || count($recruitment_torquay_stock) < 36 || count($recruitment_truro_stock) < 36 || count($recruitment_tunbridge_wells_stock) < 36 || count($recruitment_watford_stock) < 36 || count($recruitment_yeovil_stock) < 36) {

    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Recruitment</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($recruitment_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($recruitment_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($recruitment_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($recruitment_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($recruitment_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($recruitment_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($recruitment_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($recruitment_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($recruitment_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($recruitment_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($recruitment_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($recruitment_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($recruitment_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($recruitment_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($recruitment_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($recruitment_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($recruitment_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($recruitment_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($recruitment_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($recruitment_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($recruitment_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($recruitment_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($recruitment_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($recruitment_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($recruitment_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($recruitment_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($recruitment_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($recruitment_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($recruitment_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($recruitment_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($recruitment_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($recruitment_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($recruitment_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($recruitment_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($recruitment_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Recruitment', $message, $headers);

  }
}

// Carpets/flooring category check
function CS_category_carpets_flooring() {

  $carpets_flooring_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('carpets-flooring'),
  		)
  	)
  );

  $carpets_flooring_loop = get_posts($carpets_flooring_args);

  foreach ($carpets_flooring_loop as $carpets_flooring) {

  	$product_s = wc_get_product($carpets_flooring->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_bedford_stock[] = $carpets_flooring->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_bristol_stock[] = $carpets_flooring->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_birmingham_stock[] = $carpets_flooring->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_cambridge_stock[] = $carpets_flooring->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_cheltenham_stock[] = $carpets_flooring->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_cardiff_stock[] = $carpets_flooring->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_chester_stock[] = $carpets_flooring->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_coventry_stock[] = $carpets_flooring->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_derby_stock[] = $carpets_flooring->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_exeter_stock[] = $carpets_flooring->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_gloucester_stock[] = $carpets_flooring->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_grimsby_stock[] = $carpets_flooring->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_guildford_stock[] = $carpets_flooring->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_hertford_stock[] = $carpets_flooring->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_huddersfield_stock[] = $carpets_flooring->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_hull_stock[] = $carpets_flooring->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_leicester_stock[] = $carpets_flooring->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_lincoln_stock[] = $carpets_flooring->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_liverpool_stock[] = $carpets_flooring->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_llandudno_stock[] = $carpets_flooring->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_manchester_stock[] = $carpets_flooring->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_newcastle_stock[] = $carpets_flooring->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_nottingham_stock[] = $carpets_flooring->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_plymouth_stock[] = $carpets_flooring->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_scunthorpe_stock[] = $carpets_flooring->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_stoke_stock[] = $carpets_flooring->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_swansea_stock[] = $carpets_flooring->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_tamworth_stock[] = $carpets_flooring->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_teeside_stock[] = $carpets_flooring->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_torquay_stock[] = $carpets_flooring->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_truro_stock[] = $carpets_flooring->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_tunbridge_wells_stock[] = $carpets_flooring->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_watford_stock[] = $carpets_flooring->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$carpets_flooring_yeovil_stock[] = $carpets_flooring->post_title;
  		}

  	}
  }
  // carpets_flooring Category

    if(count($carpets_flooring_bedford_stock) < 36 || count($carpets_flooring_bristol_stock) < 36 || count($carpets_flooring_birmingham_stock) < 36 || count($carpets_flooring_cambridge_stock) < 36 || count($carpets_flooring_cheltenham_stock) < 36 || count($carpets_flooring_cardiff_stock) < 36 || count($carpets_flooring_chester_stock) < 36 || count($carpets_flooring_coventry_stock) < 36 || count($carpets_flooring_derby_stock) < 36 || count($carpets_flooring_exeter_stock) < 36 || count($carpets_flooring_gloucester_stock) < 36 || count($carpets_flooring_grimsby_stock) < 36 || count($carpets_flooring_guildford_stock) < 36 || count($carpets_flooring_hertford_stock) < 36 || count($carpets_flooring_huddersfield_stock) < 36 || count($carpets_flooring_hull_stock) < 36 || count($carpets_flooring_leicester_stock) < 36 || count($carpets_flooring_lincoln_stock) < 36 || count($carpets_flooring_liverpool_stock) < 36 || count($carpets_flooring_llandudno_stock) < 36 || count($carpets_flooring_manchester_stock) < 36 || count($carpets_flooring_newcastle_stock) < 36 || count($carpets_flooring_nottingham_stock) < 36 || count($carpets_flooring_plymouth_stock) < 36 || count($carpets_flooring_scunthorpe_stock) < 36 || count($carpets_flooring_stoke_stock) < 36 || count($carpets_flooring_swansea_stock) < 36 || count($carpets_flooring_tamworth_stock) < 36 || count($carpets_flooring_teeside_stock) < 36 || count($carpets_flooring_torquay_stock) < 36 || count($carpets_flooring_truro_stock) < 36 || count($carpets_flooring_tunbridge_wells_stock) < 36 || count($carpets_flooring_watford_stock) < 36 || count($carpets_flooring_yeovil_stock) < 36) {
    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Carpets & Flooring</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($carpets_flooring_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($carpets_flooring_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($carpets_flooring_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($carpets_flooring_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($carpets_flooring_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($carpets_flooring_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($carpets_flooring_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($carpets_flooring_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($carpets_flooring_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($carpets_flooring_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($carpets_flooring_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($carpets_flooring_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($carpets_flooring_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($carpets_flooring_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($carpets_flooring_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($carpets_flooring_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($carpets_flooring_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($carpets_flooring_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($carpets_flooring_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($carpets_flooring_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($carpets_flooring_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($carpets_flooring_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($carpets_flooring_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($carpets_flooring_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($carpets_flooring_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($carpets_flooring_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($carpets_flooring_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($carpets_flooring_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($carpets_flooring_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($carpets_flooring_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($carpets_flooring_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($carpets_flooring_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($carpets_flooring_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($carpets_flooring_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($carpets_flooring_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Carpets Flooring', $message, $headers);

  }
}

// Electrical category check
function CS_category_electrical() {

  $electrical_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('electrical'),
  		)
  	)
  );

  $electrical_loop = get_posts($electrical_args);

  foreach ($electrical_loop as $electrical) {

  	$product_s = wc_get_product($electrical->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$electrical_bedford_stock[] = $electrical->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$electrical_bristol_stock[] = $electrical->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$electrical_birmingham_stock[] = $electrical->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$electrical_cambridge_stock[] = $electrical->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$electrical_cheltenham_stock[] = $electrical->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$electrical_cardiff_stock[] = $electrical->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$electrical_chester_stock[] = $electrical->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$electrical_coventry_stock[] = $electrical->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$electrical_derby_stock[] = $electrical->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$electrical_exeter_stock[] = $electrical->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$electrical_gloucester_stock[] = $electrical->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$electrical_grimsby_stock[] = $electrical->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$electrical_guildford_stock[] = $electrical->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$electrical_hertford_stock[] = $electrical->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$electrical_huddersfield_stock[] = $electrical->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$electrical_hull_stock[] = $electrical->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$electrical_leicester_stock[] = $electrical->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$electrical_lincoln_stock[] = $electrical->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$electrical_liverpool_stock[] = $electrical->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$electrical_llandudno_stock[] = $electrical->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$electrical_manchester_stock[] = $electrical->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$electrical_newcastle_stock[] = $electrical->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$electrical_nottingham_stock[] = $electrical->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$electrical_plymouth_stock[] = $electrical->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$electrical_scunthorpe_stock[] = $electrical->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$electrical_stoke_stock[] = $electrical->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$electrical_swansea_stock[] = $electrical->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$electrical_tamworth_stock[] = $electrical->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$electrical_teeside_stock[] = $electrical->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$electrical_torquay_stock[] = $electrical->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$electrical_truro_stock[] = $electrical->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$electrical_tunbridge_wells_stock[] = $electrical->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$electrical_watford_stock[] = $electrical->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$electrical_yeovil_stock[] = $electrical->post_title;
  		}

  	}
  }
  // electrical Category


    if(count($electrical_bedford_stock) < 36 || count($electrical_bristol_stock) < 36 || count($electrical_birmingham_stock) < 36 || count($electrical_cambridge_stock) < 36 || count($electrical_cheltenham_stock) < 36 || count($electrical_cardiff_stock) < 36 || count($electrical_chester_stock) < 36 || count($electrical_coventry_stock) < 36 || count($electrical_derby_stock) < 36 || count($electrical_exeter_stock) < 36 || count($electrical_gloucester_stock) < 36 || count($electrical_grimsby_stock) < 36 || count($electrical_guildford_stock) < 36 || count($electrical_hertford_stock) < 36 || count($electrical_huddersfield_stock) < 36 || count($electrical_hull_stock) < 36 || count($electrical_leicester_stock) < 36 || count($electrical_lincoln_stock) < 36 || count($electrical_liverpool_stock) < 36 || count($electrical_llandudno_stock) < 36 || count($electrical_manchester_stock) < 36 || count($electrical_newcastle_stock) < 36 || count($electrical_nottingham_stock) < 36 || count($electrical_plymouth_stock) < 36 || count($electrical_scunthorpe_stock) < 36 || count($electrical_stoke_stock) < 36 || count($electrical_swansea_stock) < 36 || count($electrical_tamworth_stock) < 36 || count($electrical_teeside_stock) < 36 || count($electrical_torquay_stock) < 36 || count($electrical_truro_stock) < 36 || count($electrical_tunbridge_wells_stock) < 36 || count($electrical_watford_stock) < 36 || count($electrical_yeovil_stock) < 36) {
    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Electrical</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($electrical_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($electrical_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($electrical_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($electrical_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($electrical_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($electrical_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($electrical_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($electrical_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($electrical_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($electrical_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($electrical_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($electrical_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($electrical_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($electrical_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($electrical_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($electrical_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($electrical_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($electrical_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($electrical_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($electrical_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($electrical_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($electrical_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($electrical_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($electrical_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($electrical_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($electrical_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($electrical_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($electrical_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($electrical_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($electrical_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($electrical_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($electrical_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($electrical_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($electrical_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($electrical_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Electrical', $message, $headers);

  }

}

// Furniture/home category check
function CS_category_furniture_home() {

  $furniture_home_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('furniture-home'),
  		)
  	)
  );

  $furniture_home_loop = get_posts($furniture_home_args);

  foreach ($furniture_home_loop as $furniture_home) {

  	$product_s = wc_get_product($furniture_home->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_bedford_stock[] = $furniture_home->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_bristol_stock[] = $furniture_home->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_birmingham_stock[] = $furniture_home->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_cambridge_stock[] = $furniture_home->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_cheltenham_stock[] = $furniture_home->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_cardiff_stock[] = $furniture_home->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_chester_stock[] = $furniture_home->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_coventry_stock[] = $furniture_home->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_derby_stock[] = $furniture_home->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_exeter_stock[] = $furniture_home->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_gloucester_stock[] = $furniture_home->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_grimsby_stock[] = $furniture_home->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_guildford_stock[] = $furniture_home->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_hertford_stock[] = $furniture_home->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_huddersfield_stock[] = $furniture_home->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_hull_stock[] = $furniture_home->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_leicester_stock[] = $furniture_home->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_lincoln_stock[] = $furniture_home->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_liverpool_stock[] = $furniture_home->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_llandudno_stock[] = $furniture_home->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_manchester_stock[] = $furniture_home->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_newcastle_stock[] = $furniture_home->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_nottingham_stock[] = $furniture_home->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_plymouth_stock[] = $furniture_home->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_scunthorpe_stock[] = $furniture_home->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_stoke_stock[] = $furniture_home->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_swansea_stock[] = $furniture_home->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_tamworth_stock[] = $furniture_home->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_teeside_stock[] = $furniture_home->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_torquay_stock[] = $furniture_home->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_truro_stock[] = $furniture_home->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_tunbridge_wells_stock[] = $furniture_home->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_watford_stock[] = $furniture_home->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$furniture_home_yeovil_stock[] = $furniture_home->post_title;
  		}

  	}
  }
  // furniture_home Category

    if(count($furniture_home_bedford_stock) < 36 || count($furniture_home_bristol_stock) < 36 || count($furniture_home_birmingham_stock) < 36 || count($furniture_home_cambridge_stock) < 36 || count($furniture_home_cheltenham_stock) < 36 || count($furniture_home_cardiff_stock) < 36 || count($furniture_home_chester_stock) < 36 || count($furniture_home_coventry_stock) < 36 || count($furniture_home_derby_stock) < 36 || count($furniture_home_exeter_stock) < 36 || count($furniture_home_gloucester_stock) < 36 || count($furniture_home_grimsby_stock) < 36 || count($furniture_home_guildford_stock) < 36 || count($furniture_home_hertford_stock) < 36 || count($furniture_home_huddersfield_stock) < 36 || count($furniture_home_hull_stock) < 36 || count($furniture_home_leicester_stock) < 36 || count($furniture_home_lincoln_stock) < 36 || count($furniture_home_liverpool_stock) < 36 || count($furniture_home_llandudno_stock) < 36 || count($furniture_home_manchester_stock) < 36 || count($furniture_home_newcastle_stock) < 36 || count($furniture_home_nottingham_stock) < 36 || count($furniture_home_plymouth_stock) < 36 || count($furniture_home_scunthorpe_stock) < 36 || count($furniture_home_stoke_stock) < 36 || count($furniture_home_swansea_stock) < 36 || count($furniture_home_tamworth_stock) < 36 || count($furniture_home_teeside_stock) < 36 || count($furniture_home_torquay_stock) < 36 || count($furniture_home_truro_stock) < 36 || count($furniture_home_tunbridge_wells_stock) < 36 || count($furniture_home_watford_stock) < 36 || count($furniture_home_yeovil_stock) < 36) {
    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Furniture & Home</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($furniture_home_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($furniture_home_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($furniture_home_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($furniture_home_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($furniture_home_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($furniture_home_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($furniture_home_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($furniture_home_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($furniture_home_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($furniture_home_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($furniture_home_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($furniture_home_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($furniture_home_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($furniture_home_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($furniture_home_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($furniture_home_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($furniture_home_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($furniture_home_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($furniture_home_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($furniture_home_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($furniture_home_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($furniture_home_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($furniture_home_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($furniture_home_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($furniture_home_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($furniture_home_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($furniture_home_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($furniture_home_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($furniture_home_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($furniture_home_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($furniture_home_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($furniture_home_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($furniture_home_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($furniture_home_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($furniture_home_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Furniture Home', $message, $headers);

  }

}

// Glazing category check
function CS_category_glazing() {

  $glazing_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('glazing'),
  		)
  	)
  );

  $glazing_loop = get_posts($glazing_args);

  foreach ($glazing_loop as $glazing) {

  	$product_s = wc_get_product($glazing->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$glazing_bedford_stock[] = $glazing->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$glazing_bristol_stock[] = $glazing->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$glazing_birmingham_stock[] = $glazing->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$glazing_cambridge_stock[] = $glazing->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$glazing_cheltenham_stock[] = $glazing->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$glazing_cardiff_stock[] = $glazing->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$glazing_chester_stock[] = $glazing->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$glazing_coventry_stock[] = $glazing->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$glazing_derby_stock[] = $glazing->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$glazing_exeter_stock[] = $glazing->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$glazing_gloucester_stock[] = $glazing->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$glazing_grimsby_stock[] = $glazing->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$glazing_guildford_stock[] = $glazing->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$glazing_hertford_stock[] = $glazing->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$glazing_huddersfield_stock[] = $glazing->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$glazing_hull_stock[] = $glazing->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$glazing_leicester_stock[] = $glazing->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$glazing_lincoln_stock[] = $glazing->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$glazing_liverpool_stock[] = $glazing->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$glazing_llandudno_stock[] = $glazing->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$glazing_manchester_stock[] = $glazing->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$glazing_newcastle_stock[] = $glazing->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$glazing_nottingham_stock[] = $glazing->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$glazing_plymouth_stock[] = $glazing->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$glazing_scunthorpe_stock[] = $glazing->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$glazing_stoke_stock[] = $glazing->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$glazing_swansea_stock[] = $glazing->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$glazing_tamworth_stock[] = $glazing->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$glazing_teeside_stock[] = $glazing->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$glazing_torquay_stock[] = $glazing->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$glazing_truro_stock[] = $glazing->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$glazing_tunbridge_wells_stock[] = $glazing->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$glazing_watford_stock[] = $glazing->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$glazing_yeovil_stock[] = $glazing->post_title;
  		}

  	}
  }
  // glazing Category

    if(count($glazing_bedford_stock) < 36 || count($glazing_bristol_stock) < 36 || count($glazing_birmingham_stock) < 36 || count($glazing_cambridge_stock) < 36 || count($glazing_cheltenham_stock) < 36 || count($glazing_cardiff_stock) < 36 || count($glazing_chester_stock) < 36 || count($glazing_coventry_stock) < 36 || count($glazing_derby_stock) < 36 || count($glazing_exeter_stock) < 36 || count($glazing_gloucester_stock) < 36 || count($glazing_grimsby_stock) < 36 || count($glazing_guildford_stock) < 36 || count($glazing_hertford_stock) < 36 || count($glazing_huddersfield_stock) < 36 || count($glazing_hull_stock) < 36 || count($glazing_leicester_stock) < 36 || count($glazing_lincoln_stock) < 36 || count($glazing_liverpool_stock) < 36 || count($glazing_llandudno_stock) < 36 || count($glazing_manchester_stock) < 36 || count($glazing_newcastle_stock) < 36 || count($glazing_nottingham_stock) < 36 || count($glazing_plymouth_stock) < 36 || count($glazing_scunthorpe_stock) < 36 || count($glazing_stoke_stock) < 36 || count($glazing_swansea_stock) < 36 || count($glazing_tamworth_stock) < 36 || count($glazing_teeside_stock) < 36 || count($glazing_torquay_stock) < 36 || count($glazing_truro_stock) < 36 || count($glazing_tunbridge_wells_stock) < 36 || count($glazing_watford_stock) < 36 || count($glazing_yeovil_stock) < 36) {

    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Glazing</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($glazing_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($glazing_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($glazing_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($glazing_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($glazing_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($glazing_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($glazing_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($glazing_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($glazing_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($glazing_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($glazing_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($glazing_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($glazing_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($glazing_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($glazing_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($glazing_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($glazing_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($glazing_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($glazing_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($glazing_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($glazing_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($glazing_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($glazing_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($glazing_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($glazing_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($glazing_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($glazing_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($glazing_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($glazing_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($glazing_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($glazing_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($glazing_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($glazing_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($glazing_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($glazing_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Glazing', $message, $headers);

  }

}

// Kitchen/bedroom/bathroom category check
function CS_category_kitchens_bedrooms_bathrooms() {

  $kitchens_bedrooms_bathrooms_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('kitchens-bedrooms-bathrooms'),
  		)
  	)
  );

  $kitchens_bedrooms_bathrooms_loop = get_posts($kitchens_bedrooms_bathrooms_args);

  foreach ($kitchens_bedrooms_bathrooms_loop as $kitchens_bedrooms_bathrooms) {

  	$product_s = wc_get_product($kitchens_bedrooms_bathrooms->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_bedford_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_bristol_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_birmingham_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_cambridge_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_cheltenham_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_cardiff_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_chester_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_coventry_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_derby_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_exeter_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_gloucester_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_grimsby_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_guildford_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_hertford_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_huddersfield_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_hull_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_leicester_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_lincoln_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_liverpool_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_llandudno_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_manchester_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_newcastle_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_nottingham_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_plymouth_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_scunthorpe_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_stoke_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_swansea_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_tamworth_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_teeside_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_torquay_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_truro_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_tunbridge_wells_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_watford_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$kitchens_bedrooms_bathrooms_yeovil_stock[] = $kitchens_bedrooms_bathrooms->post_title;
  		}

  	}
  }
  // kitchens_bedrooms_bathrooms Category

    if(count($kitchens_bedrooms_bathrooms_bedford_stock) < 36 || count($kitchens_bedrooms_bathrooms_bristol_stock) < 36 || count($kitchens_bedrooms_bathrooms_birmingham_stock) < 36 || count($kitchens_bedrooms_bathrooms_cambridge_stock) < 36 || count($kitchens_bedrooms_bathrooms_cheltenham_stock) < 36 || count($kitchens_bedrooms_bathrooms_cardiff_stock) < 36 || count($kitchens_bedrooms_bathrooms_chester_stock) < 36 || count($kitchens_bedrooms_bathrooms_coventry_stock) < 36 || count($kitchens_bedrooms_bathrooms_derby_stock) < 36 || count($kitchens_bedrooms_bathrooms_exeter_stock) < 36 || count($kitchens_bedrooms_bathrooms_gloucester_stock) < 36 || count($kitchens_bedrooms_bathrooms_grimsby_stock) < 36 || count($kitchens_bedrooms_bathrooms_guildford_stock) < 36 || count($kitchens_bedrooms_bathrooms_hertford_stock) < 36 || count($kitchens_bedrooms_bathrooms_huddersfield_stock) < 36 || count($kitchens_bedrooms_bathrooms_hull_stock) < 36 || count($kitchens_bedrooms_bathrooms_leicester_stock) < 36 || count($kitchens_bedrooms_bathrooms_lincoln_stock) < 36 || count($kitchens_bedrooms_bathrooms_liverpool_stock) < 36 || count($kitchens_bedrooms_bathrooms_llandudno_stock) < 36 || count($kitchens_bedrooms_bathrooms_manchester_stock) < 36 || count($kitchens_bedrooms_bathrooms_newcastle_stock) < 36 || count($kitchens_bedrooms_bathrooms_nottingham_stock) < 36 || count($kitchens_bedrooms_bathrooms_plymouth_stock) < 36 || count($kitchens_bedrooms_bathrooms_scunthorpe_stock) < 36 || count($kitchens_bedrooms_bathrooms_stoke_stock) < 36 || count($kitchens_bedrooms_bathrooms_swansea_stock) < 36 || count($kitchens_bedrooms_bathrooms_tamworth_stock) < 36 || count($kitchens_bedrooms_bathrooms_teeside_stock) < 36 || count($kitchens_bedrooms_bathrooms_torquay_stock) < 36 || count($kitchens_bedrooms_bathrooms_truro_stock) < 36 || count($kitchens_bedrooms_bathrooms_tunbridge_wells_stock) < 36 || count($kitchens_bedrooms_bathrooms_watford_stock) < 36 || count($kitchens_bedrooms_bathrooms_yeovil_stock) < 36) {

    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: kitchens, bedrooms and bathrooms</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($kitchens_bedrooms_bathrooms_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($kitchens_bedrooms_bathrooms_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($kitchens_bedrooms_bathrooms_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($kitchens_bedrooms_bathrooms_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($kitchens_bedrooms_bathrooms_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($kitchens_bedrooms_bathrooms_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($kitchens_bedrooms_bathrooms_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($kitchens_bedrooms_bathrooms_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($kitchens_bedrooms_bathrooms_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($kitchens_bedrooms_bathrooms_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($kitchens_bedrooms_bathrooms_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($kitchens_bedrooms_bathrooms_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($kitchens_bedrooms_bathrooms_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($kitchens_bedrooms_bathrooms_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($kitchens_bedrooms_bathrooms_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($kitchens_bedrooms_bathrooms_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($kitchens_bedrooms_bathrooms_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($kitchens_bedrooms_bathrooms_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($kitchens_bedrooms_bathrooms_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($kitchens_bedrooms_bathrooms_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($kitchens_bedrooms_bathrooms_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($kitchens_bedrooms_bathrooms_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($kitchens_bedrooms_bathrooms_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($kitchens_bedrooms_bathrooms_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($kitchens_bedrooms_bathrooms_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($kitchens_bedrooms_bathrooms_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($kitchens_bedrooms_bathrooms_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($kitchens_bedrooms_bathrooms_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($kitchens_bedrooms_bathrooms_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($kitchens_bedrooms_bathrooms_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($kitchens_bedrooms_bathrooms_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($kitchens_bedrooms_bathrooms_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($kitchens_bedrooms_bathrooms_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($kitchens_bedrooms_bathrooms_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($kitchens_bedrooms_bathrooms_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - kitchens Bedrooms Bathrooms', $message, $headers);

  }

}

// Services category check
function CS_category_services() {

  $services_args = array(
  	'post_type'         => 'product',
  	'post_status'       => 'publish',
  	'posts_per_page'    => -1,
  	'tax_query' => array(
  		array(
  			'taxonomy' 			=> 'product_cat',
  			'field' 				=> 'slug',
  			'terms' 				=> array('services'),
  		)
  	)
  );

  $services_loop = get_posts($services_args);

  foreach ($services_loop as $services) {

  	$product_s = wc_get_product($services->ID);
  	$product_variations = $product_s->get_available_variations();

  	foreach ($product_variations as $variation) {
  		$product_region = $variation['attributes']['attribute_pa_regions'];

  		if('bedford' === $product_region && $variation['is_in_stock']) {
  			$services_bedford_stock[] = $services->post_title;
  		}

  		if('bristol' === $product_region && $variation['is_in_stock']) {
  			$services_bristol_stock[] = $services->post_title;
  		}

  		if('birmingham' === $product_region && $variation['is_in_stock']) {
  			$services_birmingham_stock[] = $services->post_title;
  		}

  		if('cambridge' === $product_region && $variation['is_in_stock']) {
  			$services_cambridge_stock[] = $services->post_title;
  		}

  		if('cheltenham' === $product_region && $variation['is_in_stock']) {
  			$services_cheltenham_stock[] = $services->post_title;
  		}

  		if('cardiff' === $product_region && $variation['is_in_stock']) {
  			$services_cardiff_stock[] = $services->post_title;
  		}

  		if('chester' === $product_region && $variation['is_in_stock']) {
  			$services_chester_stock[] = $services->post_title;
  		}

  		if('coventry' === $product_region && $variation['is_in_stock']) {
  			$services_coventry_stock[] = $services->post_title;
  		}

  		if('derby' === $product_region && $variation['is_in_stock']) {
  			$services_derby_stock[] = $services->post_title;
  		}

  		if('exeter' === $product_region && $variation['is_in_stock']) {
  			$services_exeter_stock[] = $services->post_title;
  		}

  		if('gloucester' === $product_region && $variation['is_in_stock']) {
  			$services_gloucester_stock[] = $services->post_title;
  		}

  		if('grimsby' === $product_region && $variation['is_in_stock']) {
  			$services_grimsby_stock[] = $services->post_title;
  		}

  		if('guildford' === $product_region && $variation['is_in_stock']) {
  			$services_guildford_stock[] = $services->post_title;
  		}

  		if('hertford' === $product_region && $variation['is_in_stock']) {
  			$services_hertford_stock[] = $services->post_title;
  		}

  		if('huddersfield' === $product_region && $variation['is_in_stock']) {
  			$services_huddersfield_stock[] = $services->post_title;
  		}

  		if('hull' === $product_region && $variation['is_in_stock']) {
  			$services_hull_stock[] = $services->post_title;
  		}

  		if('leicester' === $product_region && $variation['is_in_stock']) {
  			$services_leicester_stock[] = $services->post_title;
  		}

  		if('lincoln' === $product_region && $variation['is_in_stock']) {
  			$services_lincoln_stock[] = $services->post_title;
  		}

  		if('liverpool' === $product_region && $variation['is_in_stock']) {
  			$services_liverpool_stock[] = $services->post_title;
  		}

  		if('llandudno' === $product_region && $variation['is_in_stock']) {
  			$services_llandudno_stock[] = $services->post_title;
  		}

  		if('manchester' === $product_region && $variation['is_in_stock']) {
  			$services_manchester_stock[] = $services->post_title;
  		}

  		if('newcastle' === $product_region && $variation['is_in_stock']) {
  			$services_newcastle_stock[] = $services->post_title;
  		}

  		if('nottingham' === $product_region && $variation['is_in_stock']) {
  			$services_nottingham_stock[] = $services->post_title;
  		}

  		if('plymouth' === $product_region && $variation['is_in_stock']) {
  			$services_plymouth_stock[] = $services->post_title;
  		}

  		if('scunthorpe' === $product_region && $variation['is_in_stock']) {
  			$services_scunthorpe_stock[] = $services->post_title;
  		}

  		if('stoke' === $product_region && $variation['is_in_stock']) {
  			$services_stoke_stock[] = $services->post_title;
  		}

  		if('swansea' === $product_region && $variation['is_in_stock']) {
  			$services_swansea_stock[] = $services->post_title;
  		}

  		if('tamworth' === $product_region && $variation['is_in_stock']) {
  			$services_tamworth_stock[] = $services->post_title;
  		}

  		if('teeside' === $product_region && $variation['is_in_stock']) {
  			$services_teeside_stock[] = $services->post_title;
  		}

  		if('torquay' === $product_region && $variation['is_in_stock']) {
  			$services_torquay_stock[] = $services->post_title;
  		}

  		if('truro' === $product_region && $variation['is_in_stock']) {
  			$services_truro_stock[] = $services->post_title;
  		}

  		if('tunbridge-wells' === $product_region && $variation['is_in_stock']) {
  			$services_tunbridge_wells_stock[] = $services->post_title;
  		}

  		if('watford' === $product_region && $variation['is_in_stock']) {
  			$services_watford_stock[] = $services->post_title;
  		}

  		if('yeovil' === $product_region && $variation['is_in_stock']) {
  			$services_yeovil_stock[] = $services->post_title;
  		}

  	}
  }
  // Services Category

    if(count($services_bedford_stock) < 36 || count($services_bristol_stock) < 36 || count($services_birmingham_stock) < 36 || count($services_cambridge_stock) < 36 || count($services_cheltenham_stock) < 36 || count($services_cardiff_stock) < 36 || count($services_chester_stock) < 36 || count($services_coventry_stock) < 36 || count($services_derby_stock) < 36 || count($services_exeter_stock) < 36 || count($services_gloucester_stock) < 36 || count($services_grimsby_stock) < 36 || count($services_guildford_stock) < 36 || count($services_hertford_stock) < 36 || count($services_huddersfield_stock) < 36 || count($services_hull_stock) < 36 || count($services_leicester_stock) < 36 || count($services_lincoln_stock) < 36 || count($services_liverpool_stock) < 36 || count($services_llandudno_stock) < 36 || count($services_manchester_stock) < 36 || count($services_newcastle_stock) < 36 || count($services_nottingham_stock) < 36 || count($services_plymouth_stock) < 36 || count($services_scunthorpe_stock) < 36 || count($services_stoke_stock) < 36 || count($services_swansea_stock) < 36 || count($services_tamworth_stock) < 36 || count($services_teeside_stock) < 36 || count($services_torquay_stock) < 36 || count($services_truro_stock) < 36 || count($services_tunbridge_wells_stock) < 36 || count($services_watford_stock) < 36 || count($services_yeovil_stock) < 36) {

    //Build Email
    // DONT TOUCH
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $message = '<html><head><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"></head><body>';
    // END DONT TOUCH

    // Start Branding
    $message .='
    <table width="100%" border="0" cellspacing="0" cellpading="0" bgcolor="#040428">
      <tr>
        <td>
          <table class="container" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top" class="logo" align="center" style="padding: 36px 48px;">
                <img src="https://ci5.googleusercontent.com/proxy/Wuv9bBIFHdBulG9Qo_GsDctK--EQEBX8mtwxIvN4Lw24bquSpQp6nWw6RbBpgtBLO3xgjggXihFygkGYbDBI3lcO9tVQbF0J-pR3a-xTJelNEb3taQLxZ7KCTczmggz3xdNmVw=s0-d-e1-ft#https://storage.googleapis.com/creativestore-storage//media2017/assets/tcs.jpg" alt="The Creative Store" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize">
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#00abed" style="padding: 36px 48px; font-size: 28px;  ">
                <span style="color: #ffffff; font-family: Open Sans, Arial, sans-serif; font-weight: 600; ">Low Stock Notification</span>
              </td>
            </tr>

            <tr>
              <td valign="top" class="logo" align="center" bgcolor="#ffffff" style="padding: 12px 12px 12px 12px; font-size: 22px; border-bottom: 1px solid #e4e4e4;">
                <span style="color: #737373; font-family: Open Sans, Arial, sans-serif; font-weight: 700;">Category: Services</span>
              </td>
            </tr>
    ';
    // End Branding

    // Start title
    $message .='
      <tr>
        <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
          <table width="270" align="left">
            <tr>
              <td align="center" style="font-family: Open Sans, Arial, sans-serif;">
                <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373; ">Region</span>
              </td>
            </tr>
          </table>

          <table width="270" align="right">
            <tr>
              <td  align="center" style="font-family: Open Sans, Arial, sans-serif;">
              <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 700; font-size: 18px; color: #737373;">Stock</span>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    ';
    // End title


    // Regional stock data: Bedford
    if(count($services_bedford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bedford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_bedford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Birmingham
    if(count($services_birmingham_stock) < 36) {
      $message .='
        <tr>
            <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Birmingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_birmingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Bristol
    if(count($services_bristol_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Bristol</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_bristol_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cambridge
    if(count($services_cambridge_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cambridge</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_cambridge_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cardiff
    if(count($services_cardiff_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cardiff</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_cardiff_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Cheltenham
    if(count($services_cheltenham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Cheltenham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_cheltenham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Chester
    if(count($services_chester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Chester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_chester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Coventry
    if(count($services_coventry_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Coventry</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_coventry_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Derby
    if(count($services_derby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Derby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_derby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Exeter
    if(count($services_exeter_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Exeter</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_exeter_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Gloucester
    if(count($services_gloucester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Gloucester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_gloucester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Grimsby
    if(count($services_grimsby_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Grimsby</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_grimsby_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Guildford
    if(count($services_guildford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Guildford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_guildford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hertford
    if(count($services_hertford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hertford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_hertford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Huddersfield
    if(count($services_huddersfield_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Huddersfield</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_huddersfield_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Hull
    if(count($services_hull_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Hull</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_hull_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Leicester
    if(count($services_leicester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Leicester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_leicester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Lincoln
    if(count($services_lincoln_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Lincoln</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_lincoln_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Liverpool
    if(count($services_liverpool_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Liverpool</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_liverpool_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Llandudno
    if(count($services_llandudno_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">llandudno</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_llandudno_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Manchester
    if(count($services_manchester_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Manchester</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_manchester_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Newcastle
    if(count($services_newcastle_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Newcastle</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_newcastle_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Nottingham
    if(count($services_nottingham_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Nottingham</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_nottingham_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Plymouth
    if(count($services_plymouth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Plymouth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_plymouth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Scunthorpe
    if(count($services_scunthorpe_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Scunthorpe</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_scunthorpe_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Stoke
    if(count($services_stoke_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Stoke</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_stoke_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Swansea
    if(count($services_swansea_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Swansea</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_swansea_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tamworth
    if(count($services_tamworth_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tamworth</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_tamworth_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Teeside
    if(count($services_teeside_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Teeside</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_teeside_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Torquay
    if(count($services_torquay_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #383838;">Torquay</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_torquay_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Truro
    if(count($services_truro_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Truro</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_truro_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Tunbridge Wells
    if(count($services_tunbridge_wells_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Tunbridge Wells</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_tunbridge_wells_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Watford
    if(count($services_watford_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Watford</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_watford_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }

    // Regional stock data: Yeovil
    if(count($services_yeovil_stock) < 36) {
      $message .='
        <tr>
          <td valign="top" style="padding: 12px 12px 12px 12px; border-bottom: 1px solid #e4e4e4" bgcolor="#ffffff">
            <table width="270" align="left">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">Yeovil</span>
                </td>
              </tr>
            </table>

            <table width="270" align="right">
              <tr>
                <td align="center" style="font-family: Open Sans, Arial, sans-serif; font-weight: 300;">
                  <span style="font-family: Open Sans, Arial, sans-serif; font-weight: 300; font-size: 14px; color: #737373;">'. count($services_yeovil_stock) .'</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      ';
    }



    // Start copyright
    $message .='
              <tr>
                <td colspan="2" valign="middle" align="center" bgcolor="#ffffff" style="padding: 20px 48px 20px 48px; border:0; color:#66cdf4; font-family: Arial; font-size:12px; line-height:125%; text-align:center">
                  <p>The <span class="il">Creative</span> Store </p>
                  <p>Copyright © 2017 Trinity Mirror Plc.</p>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 30px 30px"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    ';
    // End copyright

    $message .= "</table>";
    $message .= "</body></html>";

    // Notification destination + Category
    wp_mail('jermaine.hercules@trinitymirror.com', 'CreativeStore Regional - Services', $message, $headers);

  }
}
