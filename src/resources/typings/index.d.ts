export {}

declare global {
    interface ValidationSchema {
        [key: string]: ValidationType
    }

    type ValidationType = {
        email?: boolean,
        equal?: string,
        type: string,
        required: boolean,
        matches?: string,
        max?: number,
        min?: number,
        meta?: FormMeta
    }

    type FormMeta = {
        type?: string,
        label?: string,
        helper?: string,
        placeholder?: string,
        errorTexts?: {
            [key: string]: string
        },
    }
}

declare module "schemas/*.json" {
    export default ValidationSchema;
}
