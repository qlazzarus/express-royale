import React, { useState } from 'react';

const shader = `
  precision mediump float;
  void main() {
    gl_FragColor = vec4(1, 0, 0, 1);
  }
`;

const noisePattern = () => {
    const container = document.createElement('canvas');
    const context = container.getContext('2d');
    if (!context) return container;

    const contextWidth = container.width = 100;
    const contextHeight = container.height = 100;
    const imageData = context.createImageData(contextWidth, contextHeight);

    const { data } = imageData;
    const matrix = (imageData?.width || 0) * (imageData?.height || 0);

    let p, i, seed;
    p = i = seed = 0;

    for (; i < matrix; ++i) {
        data[p++] = seed = Math.floor(Math.random() * 256);
        data[p++] = seed;
        data[p++] = seed;
        data[p++] = 255;
    }

    context?.putImageData(imageData, 0, 0);
    return container;
}

/*
const drawCanvas = () => {
    const pattern = (document && noisePattern()) || null;
    const [width, setWidth] = useState(640);
    const [height, setHeight] = useState(360);
};
*/

export default () => {
    return (
        <div>
            <ShaderCanvas width={320} height={240} fragShader={shader} />
        </div>
    );
}