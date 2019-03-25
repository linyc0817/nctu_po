( function( wp ) {
    var registerPlugin = wp.plugins.registerPlugin;
    var Fragment = wp.element.Fragment;
    var PluginSidebar = wp.editPost.PluginSidebar;
		var PluginSidebarMoreMenuItem = wp.editPost.PluginSidebarMoreMenuItem;
    var el = wp.element.createElement;

    var withDispatch = wp.data.withDispatch;
    var withSelect = wp.data.withSelect;

    var mapSelectToProps = function( select ) {
      return {
        metaFieldValue: select('core/editor')
          .getEditedPostAttribute('meta')['app-name']
      }
    };

    var mapDispatchToProps = function( dispatch ) {
      return {
        setMetaFieldValue: function(value) {
          dispatch('core/editor').editPost(
            { meta: { "app-name": value } }
          );
        }
      }
    }

    var MetaBlockField = function( props ) {
      return el(wp.components.TextControl, {
        label: 'App Name',
        value: props.metaFieldValue,
        onChange: function(content) {
          props.setMetaFieldValue(content);
        },
      });
    }

    // Redux系列，withSelect會透過mapSelectToProps將selector從Store中
    // 取出的的資料轉換爲MetaBlockField的props，這時MetaBlockField的
    // props就會有metaFieldValue
    var MetaBlockFieldWithData = withSelect(mapSelectToProps)(MetaBlockField)
    // 做的事情和上面類似，讓withDispatch用mapDispatchToProps把dispatcher
    // 塞進props裡面
    var MetaBlockFieldWithDataAndActions = withDispatch(mapDispatchToProps)(MetaBlockFieldWithData);

    registerPlugin( 'po-appname-sidebar', {
        // React系列，詳見react.createElement的用法
        render: function() {
            return el( Fragment, null, 
              el(PluginSidebar,
                {
                    name: 'po-appname-sidebar',
                    icon: 'admin-tools',
                    title: 'App Name',
                },
                el('div',
                  { 
                    className: 'po-sidebar-content'
                  },
                  el(MetaBlockFieldWithDataAndActions)
                )
              ), el(PluginSidebarMoreMenuItem,
                {
                    target: 'po-appname-sidebar',
                    icon: 'admin-tools'
                },
                'App Name'
            )
            );
        },
    } );
} )( window.wp );

