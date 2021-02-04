import React, {useEffect, useLayoutEffect, useRef} from 'react';
import {useTranslation} from 'react-i18next';
import useDimensions from 'react-cool-dimensions';
import {AspectRatio, Flex, Heading} from '@chakra-ui/react';

import {ColorCode} from "@/enums";

const noise = (canvas: HTMLCanvasElement, width: number, height: number) => {
    const context = canvas.getContext('2d');
    if (!context || !width || !height) {
        return;
    }

    // eslint-disable-next-line no-param-reassign
    canvas.width = width;
    // eslint-disable-next-line no-param-reassign
    canvas.height = height;

    const imageData = context.createImageData(width, height);
    const buffer32 = new Uint32Array(imageData.data.buffer);
    const bufferLength = buffer32.length;

    for (let i = 0; i < bufferLength; i += 1) {
        // eslint-disable-next-line no-bitwise
        buffer32[i] = ((255 * Math.random()) || 0) << 24;
    }

    context.putImageData(imageData, 0, 0);
}

export default (): JSX.Element => {
    const ref = useRef(null);
    const {t} = useTranslation();
    const {width, height} = useDimensions({ref});

    useLayoutEffect(() => {
        const animate = () => {
            const {current} = ref;
            // eslint-disable-next-line no-useless-return
            if (!current) return;
            noise(current as unknown as HTMLCanvasElement, width, height);
            requestAnimationFrame(animate);
        }

        requestAnimationFrame(animate);
    }, [ref, width, height]);

    useEffect(() => {
        const {current} = ref;
        // eslint-disable-next-line no-useless-return
        if (!current) return;
        noise(current as unknown as HTMLCanvasElement, width, height);
    });

    return (
        <Flex py='4' direction='column' justifyContent='center' alignItems='center'>
            <AspectRatio
                ratio={1}
                m={4}
                maxW='sm'
                width='50vw'
                _after={{
                    alignItems: 'center',
                    color: '#ffffff',
                    content: `"${t('NOT_FOUND_CODE')}"`,
                    display: 'flex',
                    fontSize: '300%',
                    fontWeight: 'bold',
                    height: '100%',
                    justifyContent: 'center',
                    marginTop: '-100%',
                    position: 'absolute',
                    textAlign: 'center',
                    width: '100%'
                }}
            >
                <canvas
                    ref={ref}
                    style={{
                        borderRadius: '1em'
                    }}
                />
            </AspectRatio>
            <Heading textAlign='center' color={ColorCode.PRIMARY_BOLD}>
                {t('NOT_FOUND_MESSAGE')}
            </Heading>
        </Flex>
    );
};
