/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "both",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'GPLD_full_logo',
                            type: 'image',
                            rect: ['0px', '38px', '1140px', '304px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"GPLD%20full%20logo.svg",'0px','0px']
                        },
                        {
                            id: 'yellow_diamond',
                            type: 'image',
                            rect: ['80px', '38px', '144px', '144px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"yellow%20diamond.svg",'0px','0px']
                        },
                        {
                            id: 'red_diamond',
                            type: 'image',
                            rect: ['80px', '198px', '144px', '144px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"red%20diamond.svg",'0px','0px']
                        },
                        {
                            id: 'green_diamond',
                            type: 'image',
                            rect: ['0px', '118px', '144px', '144px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"green%20diamond.svg",'0px','0px']
                        },
                        {
                            id: 'brown_diamond',
                            type: 'image',
                            rect: ['160px', '118px', '144px', '144px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"brown%20diamond.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: [undefined, undefined, '1140px', '380px'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 0,
                    autoPlay: true,
                    data: [

                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("edge_edgeActions.js");
})("EDGE-129880187");
