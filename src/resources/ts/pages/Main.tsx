import React from 'react';
import {useTranslation} from 'react-i18next';
import {Link} from 'react-router-dom';
import ReactMarkdown from 'react-markdown/with-html';
import {Box, Button, Flex, Heading, VStack} from '@chakra-ui/react';

import {ColorCode, Path} from "@/enums";
import {SignInForm} from "@/forms";
import {isLogged} from "@/selectors";

const Menu = ({title, to}: {title: string, to: string}): JSX.Element => {
    return (
        <Box py={2} width={'100%'}>
            <Link to={to}>
                <Button isFullWidth colorScheme='red'>
                    {title}
                </Button>
            </Link>
        </Box>
    )
}

const TransferMenu = (): JSX.Element => {
    const {t} = useTranslation();

    return (
        <VStack p={10} width={'sm'}>
            <Menu title={t('MENU_TRANSFER')} to={Path.TRANSFER} />
            <Menu title={t('MENU_GAME')} to={Path.GAME} />
        </VStack>
    );
};

export default (): JSX.Element => {
    const {t} = useTranslation();
    const logged = isLogged();

    return (
        <Flex py='4' direction='column' justifyContent='center' alignItems='center'>
            <Box textAlign='center'>
                <ReactMarkdown source={t('INTRO') || ''} escapeHtml={false}/>
            </Box>
            <Heading size='4xl' textAlign='center' color={ColorCode.PRIMARY_BOLD}>
                {t('TITLE')}
            </Heading>
            {logged ? <TransferMenu/> : <SignInForm/>}
        </Flex>
    );
};
