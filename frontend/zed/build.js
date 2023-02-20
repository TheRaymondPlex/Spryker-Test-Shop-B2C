const oryx = require("@spryker/oryx");
const oryxForZed = require("@spryker/oryx-for-zed");
const path = require('path');
const merge = require('webpack-merge');
const mergeWithStrategy = merge.smartStrategy({
    plugins: 'prepend'
});

const myCustomZedSettings = mergeWithStrategy(oryxForZed.settings, {
    entry: {
        dirs: [path.resolve('./src/Pyz/Zed/')] // Path for entry points on project level
    },
    resolveModules: {
        dirs: [path.resolve('./src/Pyz/Zed/')]
    }
});

oryxForZed.getConfiguration(myCustomZedSettings).then(configuration => oryx.build(mergeWithStrategy(configuration, {
    resolve: {
        alias: {
            Gui: `Gui/assets/Zed/js/modules/commons`,
            GuiEditorConfiguration: `Gui/assets/Zed/js/modules/editor`,
            GuiModules: `Gui/assets/Zed/js/modules`,
            jQuery: 'jquery',
        }
    }
})));
