        </div>
        <footer id="footer" class="clearfix">
			<p class="right">Theme by <a href="http://mzw.me" target="_blank">javis</a></p>
			<p class="left"><?php echo dopt('d_notice_bottom');?></p>
		</footer>
	</div>
	
	<img id="qrimg" src="http://qr.liantu.com/api.php?text=<?php global $wp;echo home_url(add_query_arg(array(),$wp->request));?>"/>
	<a id="qr" href="javascript:;"><i class="fa fa-qrcode"></i></a>
	<a id="gotop" href="javascript:;"><i class="fa fa-arrow-up"></i></a>
	
<?php 
if( dopt('d_track_b') != '' ) echo dopt('d_track');
if( dopt('d_footcode_b') != '' ) echo dopt('d_footcode');

if( is_single() && dopt('d_sideroll_single_b') ){ 
	$sr_1 = dopt('d_sideroll_single_1');
	$sr_2 = dopt('d_sideroll_single_2');
}elseif( is_home() && dopt('d_sideroll_index_b') ){
	$sr_1 = dopt('d_sideroll_index_1');
	$sr_2 = dopt('d_sideroll_index_2');
}elseif(is_page() && dopt('d_sideroll_page_b')){
	$sr_1 = dopt('d_sideroll_page_1');
	$sr_2 = dopt('d_sideroll_page_2');
}else{
	$sr_1 = 2;
	$sr_2 = 4;
}
echo '<script>var asr_1 = '.$sr_1.',asr_2 = '.$sr_2.';var home = "'.get_bloginfo('url').'";</script>';

wp_footer();

?>  
</body>
</html>