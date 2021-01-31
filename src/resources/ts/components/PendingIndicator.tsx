import React from 'react';
import {CircularProgress} from '@chakra-ui/react';

import {ColorCode, LayerDepth} from "@/enums";
import {isPending} from "@/selectors";

export default () => {
    const pending = isPending();

    if (!pending) {
        return null;
    }

    return (
        <CircularProgress
            bottom={30}
            color={ColorCode.PRIMARY_BOLD}
            isIndeterminate
            position={'fixed'}
            right={30}
            zIndex={LayerDepth.INDICATOR}
        />
    );
}
