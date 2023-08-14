module.exports = {
    content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
    ],{ dot: true }),
    theme: {
        extend: {
            tailglass: theme => ({
                primary_color: '#ff22ff',
                secondary_color: '#22ffff',

                backdrop_blur_px: 6,
                backdrop_sat_percent: 125,
                glass_border_width_px: 2,
                glass_border_color: 'rgba(115, 115, 115, 0.35)',
                glass_fade_deg: 45,
                glass_bg_start: 'rgba(255, 255, 255, 0.15)',
                glass_bg_end: 'rgba(255, 255, 255, 0.05)',
                
                pulse_speed_ms: 9000,
                pulse_depth_multiplier: 2
            }),
        },
    },
    plugins: [
        require("./tailglass_lib/index"),
    ]
};
