import {Resolver} from "react-hook-form";
import {yupResolver} from '@hookform/resolvers/yup';
import {Validator} from "@/enums";
import {getValidator, schemaGenerator} from '@/helpers';

export default (validator: Validator): Resolver => yupResolver(schemaGenerator(getValidator(validator)));
