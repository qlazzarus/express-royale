export {}

declare global {
    interface InputFormProps {
        [key: string]: any,
        className?: string,
        type?: 'text' | 'password' | 'number' | 'email' | 'datetime' | 'datetime-local',
        placeholder?: string,
        defaultValue?: string | number,
        onChange?: Function
    }

    interface FlashMessageProps {
        message: string,
        type: 'alert',
        closeIn: number
    }

    interface StringArrayEntries {
        [key: string]: string[]
    }
}
