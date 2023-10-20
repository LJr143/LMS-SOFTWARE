
    $(function() {

    class GaugeChart {
        constructor(element, params) {
            this._element = element;
            this._initialValue = params.initialValue;
            this._higherValue = params.higherValue;
            this._title = params.title;
            this._subtitle = params.subtitle;
        }

        _buildConfig() {
            let element = this._element;

            return {
                value: this._initialValue,
                valueIndicator: {
                    color: 'darkred'
                },

                geometry: {
                    startAngle: 180,
                    endAngle: 360
                },

                scale: {
                    startValue: 0,
                    endValue: this._higherValue,
                    customTicks: [0, 250, 500, 780, 1050, 1300, 1560],
                    tick: {
                        length: 8
                    },

                    label: {
                        font: {
                            color: '#87959f',
                            size: 9,
                            family: '"Open Sans", sans-serif'
                        }
                    }
                },



                title: {
                    verticalAlignment: 'bottom',
                    text: this._title,
                    font: {
                        family: '"Open Sans", sans-serif',
                        color: 'red',
                        size: 18
                    },

                    subtitle: {
                        text: this._subtitle,
                        font: {
                            family: '"Open Sans", sans-serif',
                            color: 'darkred',
                            weight: 700,
                            size: 28
                        }
                    }
                },



                onInitialized: function() {
                    let currentGauge = $(element);
                    let circle = currentGauge.find('.dxg-spindle-hole').clone();
                    let border = currentGauge.find('.dxg-spindle-border').clone();

                }
            };


        }

        init() {
            $(this._element).dxCircularGauge(this._buildConfig());
        }
    }


    $(document).ready(function() {

    $('.gauge').each(function(index, item) {
    let params = {
    initialValue: 780,
    higherValue: 1560,
    title: `Excellent`,
    subtitle: '780 '
};


    let gauge = new GaugeChart(item, params);
    gauge.init();
});

    $('#random').click(function() {

    $('.gauge').each(function(index, item) {
    let gauge = $(item).dxCircularGauge('instance');
    let randomNum = Math.round(Math.random() * 1560);
    let gaugeElement = $(gauge._$element[0]);

    gaugeElement.find('.dxg-title text').last().html(`${randomNum} ºC`);
    gauge.value(randomNum);
});
});
});

});


