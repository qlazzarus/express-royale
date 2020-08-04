export {}

declare global {
    interface InputFormProps {
        [key: string]: unknown,
        className?: string,
        type?: 'text' | 'password' | 'number' | 'email' | 'datetime' | 'datetime-local',
        placeholder?: string,
        defaultValue?: string | number,
        onChange?: () => void
    }

    interface FlashMessageProps {
        message: string,
        type: 'alert',
        closeIn: number
    }

    interface StringArrayEntries {
        [key: string]: string[]
    }

    interface ValidationSchema {
        [key: string]: {
            email?: boolean,
            equal?: string,
            type: string,
            required: boolean,
            matches?: boolean,
            max?: number,
            min?: number,
        }
    }

    type CustomHookType = [
        unknown,
        (value: unknown) => void
    ]
}

declare module "schemas/*.json" {
    export default ValidationSchema;
}