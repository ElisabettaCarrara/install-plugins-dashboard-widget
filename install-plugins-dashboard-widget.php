<?php
/*
Plugin Name: ClassicPress Dashboard Widgets
Description: Adds custom dashboard widgets for ClassicPress plugins.
Version: 1.0
Author: Elisabetta Carrara
*/

add_action('wp_dashboard_setup', 'classicpress_plugins_install_widget');

function classicpress_plugins_install_widget() {
    wp_add_dashboard_widget(
        'classicpress_plugins_install_widget',
        'Get These Essential ClassicPress Plugins',
        'classicpress_plugins_install_widget_display'
    );
}

function classicpress_plugins_install_widget_display() {
    ?>
    <p><strong>Enhance Your Site Effortlessly!</strong></p>
    <p>
        We’ve handpicked two powerful plugins designed to supercharge your ClassicPress experience and help you manage your site more efficiently.
        To get started, simply download these plugins from the buttons below. After downloading, follow the easy steps to upload and activate them on your site — no technical skills required!
    </p>

    <div style="margin-bottom: 15px;">
        <strong>Switch to ClassicPress</strong><br>
        Switch your WordPress installation to ClassicPress. Also a tool to try different versions of ClassicPress (like nightly builds or RCs), perform rollbacks to WP or to earlier CP versions.<br>
        <a href="https://github.com/ClassicPress/ClassicPress-Migration-Plugin/releases/download/1.5.2/switch-to-classicpress.zip" target="_blank" rel="noopener" style="display:inline-block; margin-top:5px; padding:8px 15px; background-color:#0085ba; color:#fff; text-decoration:none; border-radius:3px;">DOWNLOAD</a>
    </div>

    <div style="margin-bottom: 15px;">
        <strong>ClassicPress Directory Integration</strong><br>
        Install ClassicPress plugins and themes directly from your dashboard.<br>
        <a href="https://github.com/ClassicPress/classicpress-directory-integration/releases/download/1.1.5/classicpress-directory-integration-1.1.5.zip" target="_blank" rel="noopener" style="display:inline-block; margin-top:5px; padding:8px 15px; background-color:#0085ba; color:#fff; text-decoration:none; border-radius:3px;">DOWNLOAD</a>
    </div>

    <p>
        Click the download link for each plugin to get the ZIP files, then visit your ClassicPress dashboard: <strong>Plugins &gt; Add New &gt; Upload Plugin.</strong><br>
        Upload the ZIP file and click “Install Now.”<br>
        Activate the plugin and start enjoying the benefits immediately!
    </p>
    <?php
}
