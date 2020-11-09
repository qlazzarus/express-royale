import i18n from 'i18next';
import { initReactI18next } from "react-i18next";
import LanguageDetector from 'i18next-browser-languagedetector';

import { Language } from '@/enums';
import { Korean } from '@/languages';

export default i18n.use(initReactI18next)
    .use(LanguageDetector)
    .init({
        resources: { 
            KR: { translation: Korean }
        },
        fallbackLng: Language.KR,
        debug: true
    });