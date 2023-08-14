module.exports = {
    components: function (tailglass) {
        let background = {
            'background': `linear-gradient(${tailglass.glass_fade_deg ?? 90}deg, ${tailglass.glass_bg_start ?? 'white'} calc(0% + var(--tg-fade-subtract)), ${tailglass.glass_bg_end ?? 'white'} calc(100% - var(--tg-fade-subtract)))`,
            'backdrop-filter': `blur(${tailglass.backdrop_blur_px ?? 0}px) saturate(${tailglass.backdrop_sat_percent ?? 100}%)`,
        };

        let borders = {
            'border-width': (tailglass.glass_border_width_px ?? 2)+"px",
            'border-color': tailglass.glass_border_color ?? 'white',
            'border-style': 'solid',
        };

        return {
            '.glassify-full': {
                ...background,
                ...borders
            },
            '.glassify-bg': {
                ...background
            },
            '.glassify-borders': {
                ...borders
            },
        };
    },

    utilities: function (tailglass) {
        let pulse_upper = tailglass.pulse_depth_multiplier ?? 2
        let pulse_lower = 1/pulse_upper;

        return {
            '.glassify-fade-none': {
                '--tg-fade-subtract': '50%'
            },
            '.glassify-fade-half': {
                '--tg-fade-subtract': '25%'
            },
            '@keyframes pulseBdBlur': {
                '0%': {
                    'backdrop-filter': `blur(${(tailglass.backdrop_blur_px ?? 0)*pulse_lower}px) saturate(${tailglass.backdrop_sat_percent ?? 100}%)`,
                },
                '50%':{
                    'backdrop-filter': `blur(${(tailglass.backdrop_blur_px ?? 6)*pulse_upper}px) saturate(${tailglass.backdrop_sat_percent ?? 100}%)`,
                },
                '100%': {
                    'backdrop-filter': `blur(${(tailglass.backdrop_blur_px ?? 0)*pulse_lower}px) saturate(${tailglass.backdrop_sat_percent ?? 100}%)`,
                }
            },
            '.glassify-pulse-bd-blur': {
                'animation': `pulseBdBlur ${(tailglass.pulse_speed_ms ?? 9000)}ms ease-in-out infinite`,
            },
            '@keyframes pulseBdSat': {
                '0%': {
                    'backdrop-filter': `blur(${(tailglass.backdrop_blur_px ?? 0)}px) saturate(${(tailglass.backdrop_sat_percent ?? 0)*pulse_lower}%)`,
                },
                '50%':{
                    'backdrop-filter': `blur(${(tailglass.backdrop_blur_px ?? 0)}px) saturate(${(tailglass.backdrop_sat_percent ?? 100)*pulse_upper}%)`,
                },
                '100%': {
                    'backdrop-filter': `blur(${(tailglass.backdrop_blur_px ?? 0)}px) saturate(${(tailglass.backdrop_sat_percent ?? 0)*pulse_lower}%)`,
                }
            },
            '.glassify-pulse-bd-sat': {
                'animation': `pulseBdSat ${(tailglass.pulse_speed_ms ?? 9000)}ms ease-in-out infinite`,
            }
        };
    }
};