<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>

<script>

    anychart.onDocumentReady(function () {
        var data = [
            {x: 'A', value: 20},
            {x: 'B', value: 12},
            {x: 'C', value: 17},
            {x: 'A&B', value: 4},
            {x: 'B&C', value: 5},
            {x: 'A&C', value: 7},
            {x: 'A&B&C', value: 1}
        ];

        // Creates Venn chart.
        var chart = anychart.venn(data);

        chart.title('VENN CHART');
        chart.container('container');
        chart.draw();
    });
</script>

<?php
       $is_charttest_theme_exist = function_exists( 'single' );

		get_template_part( 'template-parts/single' );

?>
<?php get_footer(); ?>
