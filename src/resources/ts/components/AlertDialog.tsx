import React from 'react';
import {Alert, AlertIcon, Stack} from '@chakra-ui/react';

import {alertEntries} from "@/selectors";

export default () => {
    const entries = alertEntries();

    if (!entries.length) {
        return null;
    }

    return (
        <Stack
            marginTop={14}
            padding={3}
            position='fixed'
            spacing={3}
            width='100%'
        >
            {Object.entries(entries).map(([id, entry]) => {
                return (
                    <Alert status={entry.status} key={id}>
                        <AlertIcon />
                        {entry.message}
                    </Alert>
                )
            })}
        </Stack>
    );
}
