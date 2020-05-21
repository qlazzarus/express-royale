import i18n from 'i18next';
import { initReactI18next } from "react-i18next";
import { Language } from '@/enums';
import { Korean } from '@/languages';

i18n.use(initReactI18next)
    .init({
        resources: { 
            KR: { translation: Korean }
        },
        lng: Language.KR, // todo mobx state will be here
        fallbackLng: Language.KR,
        debug: true
    });

export default i18n;