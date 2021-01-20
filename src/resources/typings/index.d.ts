export {}

declare global {
    interface ValidationSchemaCollection {
        [key: string]: ValidationSchema
    }

    type ValidationSchema = {
        email?: boolean,
        equal?: string,
        type: string,
        required: boolean,
        matches?: string,
        max?: number,
        min?: number,
        form?: FormSchema
    }

    type FormSchema = {
        type?: string,
        label?: string,
        helper?: string,
        placeholder?: string,
        errorTexts?: {
            [key: string]: string
        },
    }

    type UnprocessableEntityResponse = {
        message: string,
        errors: {
            [key: string]: string[]
        }
    }

    type AccountInfoSuccessResponse = {
        channels: ({
            channels: string,
            channelId: string
        })[],
        uniqueIdentifier: string
    }

    type TokenSuccessResponse = {
        token: string
    }
}

declare module "schemas/*.json" {
    export default ValidationSchemaCollection;
}
