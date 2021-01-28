import React from 'react';
import {useTranslation} from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';
import {Box, Flex, Heading} from '@chakra-ui/react';

import {ColorCode} from "@/enums";
import {SignInForm} from "@/forms";

/*
const TransferMenu = () => {
  const { t } = useTranslation();

  return (
    <div className="bg-gray-900 rounded w-full md:w-1/2 px-8 pt-6 pb-8 mx-auto my-8">
      <Link
        to={Path.TRANSFER}
        className="inline-block w-full text-center bg-red-500 hover:bg-red-700 text-white my-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline"
      >
        {t('MENU_TRANSFER')}
      </Link>
      <Link
        to={Path.GAME}
        className="inline-block w-full text-center bg-red-500 hover:bg-red-700 text-white my-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline"
      >
        {t('MENU_GAME')}
      </Link>
    </div>
  );
};
 */

export default (): JSX.Element => {
    const {t} = useTranslation();

    return (
        <Flex py='4' direction='column' justifyContent='center' alignItems='center'>
            <Box textAlign='center'>
                <ReactMarkdown source={t('INTRO') || ''} escapeHtml={false}/>
            </Box>
            <Heading size='4xl' textAlign='center' color={ColorCode.PRIMARY_BOLD}>
                {t('TITLE')}
            </Heading>

            {/* logged ? <TransferMenu /> : <SignInForm /> */}
            <SignInForm/>
        </Flex>
    );
};
