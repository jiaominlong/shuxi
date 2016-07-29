/**
 * Created by jml on 2016/7/29.
 */
$(".js-select-product li").click(function(){
    if ($(this).attr('class') == 'select'){
        // $(".js-selected-product").children('li').remove()
        $value= $(this).val();
        console.log($value)
        $(this).toggleClass("select");
        $(".js-selected-product").children('li[value='+$value+']').remove();
        // 总金额
        $price = $(".product-all-price").children('em').text();
        $price = parseInt($price) - parseInt($(this).attr('data-price'));
        $(".product-all-price").children('em').text($price);
        // 折后应付
        $price_dis = $(".product-price-discount").children('span').text();
        $price_dis = Number($price_dis)-parseInt($(this).attr('data-price'))*Number($(this).attr('data-discount'));
        $(".product-price-discount").children('span').text($price_dis);
    }else{
        $(this).toggleClass("select");
        $(".js-selected-product").append($(this).clone());
        // 总金额
        $price = $(".product-all-price").children('em').text();
        $price = parseInt($(this).attr('data-price'))+parseInt($price);
        $(".product-all-price").children('em').text($price);
        // 折后应付
        $price_dis = $(".product-price-discount").children('span').text();
        $price_dis = parseInt($(this).attr('data-price'))*Number($(this).attr('data-discount'))+Number($price_dis);
        $(".product-price-discount").children('span').text($price_dis);

    }
});