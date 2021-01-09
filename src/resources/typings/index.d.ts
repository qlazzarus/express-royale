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
        matches?: boolean,
        max?: number,
        min?: number,
    }
}

declare module "schemas/*.json" {
    export default ValidationSchema;
}
