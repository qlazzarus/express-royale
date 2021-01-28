import React from 'react';
import {useSelector} from "react-redux";
import {CircularProgress} from '@chakra-ui/react';

import {ColorCode, LayerDepth} from "@/enums";
import {RootState} from "@/reducers";

export default () => {
    const {pending} = useSelector((state: RootState) => state.app);

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
